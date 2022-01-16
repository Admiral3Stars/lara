@extends('layouts.main')
@section('title')
    Login @parent
@endsection
@push('alt')
    <link href="{{ asset('css/alt.css') }}" rel="stylesheet">
@endpush
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Login</h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="loginform">
        <form action="" method="POST">
            <input type="text" placeholder="login">
            <input type="password" placeholder="*******">
            <input type="submit" value="login">
        </form>
    </div>
@endsection
