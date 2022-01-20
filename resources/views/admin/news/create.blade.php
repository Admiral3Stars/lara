@extends('layouts/admin')
@section('title') Add news @endsection
@section('header')
    <h1 class="h2">Add news</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
        </div>
    </div>
@endsection
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif
    <div>
        <form action="{{ route('admin.news.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">News name</label>
                <input id="title" class="form-control" type="text" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="author">Author name</label>
                <input id="author" class="form-control" type="text" name="author" value="{{ old('author') }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" class="form-control" name="status">
                    <option @if(old('status') === 'DRAFT') selected @endif>DRAFT</option>
                    <option @if(old('status') === 'ACTIVE') selected @endif>ACTIVE</option>
                    <option @if(old('status') === 'BLOCKED') selected @endif>BLOCKED</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">News description</label>
                <textarea id="description" class="form-control" name="description">{!! old('description') !!}</textarea>
            </div>
            <button class="btn btn-success btn-right">Сохранить</button>
        </form>
    </div>
@endsection
