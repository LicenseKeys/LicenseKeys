@extends('users.home')
@section('title')
Support
@endsection
@section('dashboardcontent')
<div class="row">
  <div class="col-lg-3">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><i class="glyphicon glyphicon-filter"></i>Quick Sort</div>
      <ul class="list-group">
        <li class="list-group-item">Cras justo odio<span class="badge">14</span></li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>
  </div>
  <div class="col-lg-9">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Status</th>
            <th>Last Reply</th>
          </tr>
        </thead>
        <tbody class="col-lg-12">
          @foreach ($tickets as $ticket)
            <tr>
              <td>{{ $ticket->id }}</td>
              <td>{{ $ticket->title }}</td>
              <td>{{ $ticket->state }}</td>
              <td>{{ $ticket->last_response }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
      @if ($tickets->count() < 1)
        <div class="row text-center">
          <h4>You don't seem to have any support tickets</h4>
          <a href="{{ route('user.support.create') }}" class="btn btn-primary">Open Support Ticket</a>
        </div>
      @endif
  </div>
</div>
@endsection
