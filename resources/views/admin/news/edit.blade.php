@extends('layouts/admin')
@section('title') Edit news @endsection
@section('header')
    <h1 class="h2">Edit news</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
        </div>
    </div>
@endsection
@section('content')
    @include('inc.message')
    <div>
        <form action="{{ route('admin.news.update', ['news' => $news]) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="category_id">Category id</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                        @if($category->id === $news->category_id) selected @endif>{{ $category->title }}</option>
                    @endforeach
                </select>
                @error('category_id') <span class="error-text">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="title">News name</label>
                <input id="title" class="form-control" type="text" name="title" value="{{ $news->title }}">
                @error('title') <span class="error-text">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="author">Author name</label>
                <input id="author" class="form-control" type="text" name="author" value="{{ $news->author }}">
                @error('author') <span class="error-text">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" class="form-control" name="status">
                    <option @if($news->status === 'DRAFT') selected @endif>DRAFT</option>
                    <option @if($news->status === 'ACTIVE') selected @endif>ACTIVE</option>
                    <option @if($news->status === 'BLOCKED') selected @endif>BLOCKED</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">News description</label>
                <textarea id="description" class="form-control" name="description">{!! $news->description !!}</textarea>
            </div>
            <button class="btn btn-success btn-right">Сохранить</button>
        </form>
    </div>
@endsection
