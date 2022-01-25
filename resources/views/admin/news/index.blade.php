@extends('layouts/admin')
@section('title') News list @endsection
@section('header')
    <h1 class="h2">News list</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Add news</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Header</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @forelse($newsList as $news)
                    <tr>
                        <td>{{ $news->id }}</td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->status }}</td>
                        <td>{{ $news->author }}</td>
                        <td>{{ $news->description }}</td>
                        <td><a href="{{ route('admin.news.edit', ['news' => $news->id]) }}">Update</a> | <a href="javascript:;">Delete</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Нет записей</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
