@extends('layouts/admin')
@section('title') News list @endsection
@section('header')
    <h1 class="h2">News list</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Add category</a>
        </div>
    </div>
@endsection
@section('content')
    <x-alert type="success" message="All be good!"></x-alert>
    <x-alert type="warning" message="Not all be good!"></x-alert>
    <x-alert type="danger" message="All be bad!"></x-alert>
@endsection
