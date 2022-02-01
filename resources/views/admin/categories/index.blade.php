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
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>count</th>
                <th>Header</th>
                <th>Description</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->news()->count() }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a href="{{ route('admin.categories.edit', ['category' => $category]) }}">Update</a> | <a href="javascript:;">Delete</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Нет записей</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
@endsection
