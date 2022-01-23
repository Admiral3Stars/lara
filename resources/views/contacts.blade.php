@extends('layouts.main')
@section('title')
    Contacts @parent
@endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Contacts</h1>
        </div>
    </div>
@endsection
@section('content')
    <h3 class="content-header">Write to us</h3>
    <div>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Enter your name</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="phone">Enter your name</label>
                <input id="phone" class="form-control" type="text" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Enter your name</label>
                <input id="email" class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Enter your message</label>
                <textarea id="message" class="form-control" name="message"></textarea>
            </div>
            <button class="btn btn-success btn-right">Отправить</button>
        </form>
    </div>
@endsection
