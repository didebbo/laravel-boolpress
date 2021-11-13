@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card">
            <img class="card-img-top" style="height: 10em; padding: 1em; object-fit: contain; object-position: left;"
                src="{{ $post['url_thumb'] }}" alt="{{ $post['title'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{ $post['content'] }}</p>
                <a href="{{ route('admin.posts.edit', $post['id']) }}" class="btn btn-primary">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete">
                    Delete
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete the post {{ $post['id'] }}?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    This will delete the post: {{ $post['title'] }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <form action="{{ route('admin.posts.destroy', $post['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
