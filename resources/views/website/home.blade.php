@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-header">Home</div>
                <div class="card-block">
                  Welcome to {{config('app.name')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
