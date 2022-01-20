@extends('layouts.main')
@section('title')
    Category # {{ $categoriesItem['id'] }}@parent
@endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">This category have id {{ $categoriesItem['id'] }}</h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                <div class="card-body">
                    <div class="card-header">
                        <strong>{{$categoriesItem['title']}}</strong>
                    </div>
                    <p class="card-text">{!! $categoriesItem['description'] !!}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Autor: {{$categoriesItem['autor']}}</small>
                        <small class="text-muted">{{ Now('Europe/Moscow') }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
