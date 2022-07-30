@extends('includes.admin.dashboard.main')

@section('container')
    <div class="section-header">
        <h1>Welcome back, {{ auth()->user()->name }}</h1>
    </div>
    <div class="section-body">
    </div>
@endsection
