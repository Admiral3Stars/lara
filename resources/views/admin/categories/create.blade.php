@extends('layouts/admin')
@section('title') Add category @endsection
@section('header')
    <h1 class="h2">Add category</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
        </div>
    </div>
@endsection
@section('content')
    <div>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Category name</label>
                <input id="title" class="form-control" type="text" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Category description</label>
                <textarea id="description" class="form-control" name="description"></textarea>
            </div>
            <button class="btn btn-success btn-right">Сохранить</button>
        </form>
    </div>
@endsection
