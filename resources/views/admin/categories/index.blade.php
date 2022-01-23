@extends('layouts/admin')
@section('title') Categories list @endsection
@section('header')
    <h1 class="h2">Categories list</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('admin.categories.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Add category</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="table-responsive">

    </div>
@endsection
