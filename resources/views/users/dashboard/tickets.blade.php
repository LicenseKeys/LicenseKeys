@extends('users.home')
@section('title')
Support
@endsection
@section('dashboardcontent')
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
@endsection
