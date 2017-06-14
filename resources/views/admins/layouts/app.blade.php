<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-toggleable-md navbar-user">
          <div class="navbar-header">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#user-nav" aria-controls="user-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-brand">{{ config('app.name', 'Laravel') }}</div>
          </div>
          <div class="collapse navbar-collapse" id="user-nav">
            <ul class="nav navbar-nav mr-auto">

            </ul>
            <ul class="nav navbar-nav my-2 my-lg-0">
              @if (Auth::check())
                  <li class="nav-item"><a class="nav-link" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              @endif
            </ul>
          </div>
      </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
