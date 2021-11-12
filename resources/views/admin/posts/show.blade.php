@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card">
            <img class="card-img-top" src="{{ $post['url_thumb'] }}" alt="{{ $post['title'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{ $post['content'] }}</p>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
@endsection
