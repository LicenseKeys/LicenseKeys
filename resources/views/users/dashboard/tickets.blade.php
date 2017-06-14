@extends('users.home')
@section('title')
Support
@endsection
@section('dashboardcontent')
<div class="row">
  <div class="col-lg-3">
    <div class="card quick">
      <!-- Default panel contents -->
      <div class="card-header"><i class="fa fa-fw fa-filter"></i>Quick Sort</div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><i class="fa fa-fw fa-dot-circle-o" aria-hidden="true"></i>Open<span class="badge badge-pill badge-default">14</span></li>
        <li class="list-group-item"><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Closed<span class="badge badge-pill badge-default">14</span></li>
        <li class="list-group-item"><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Answered<span class="badge badge-pill badge-default">14</span></li>
        <li class="list-group-item"><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>Customer-Reply<span class="badge badge-pill badge-default">14</span></li>
      </ul>
    </div>
  </div>
  <div class="col-lg-9">
      <table class="table table-striped">
        <thead class="thead-default">
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
      @if ($tickets->count() < 1)
        <div class="container text-sm-center">
          <h4>You don't seem to have any support tickets</h4>
          <a href="{{ route('user.support.create') }}" class="btn btn-primary">Open Support Ticket</a>
        </div>
      @endif
  </div>
</div>
@endsection
