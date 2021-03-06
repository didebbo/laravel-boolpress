@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $category['title'] }}</h5>
                <a href="{{ route('admin.categories.edit', $category['id']) }}" class="btn btn-primary">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete">
                    Delete
                </button>
            </div>
            <ul>
                @foreach ($category['posts'] as $post)
                    <li>
                        <a href="{{ route('admin.posts.show', $post) }}">{{ $post['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete the category {{ $category['id'] }}?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    This will delete the category: {{ $category['title'] }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <form action="{{ route('admin.categories.destroy', $category['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
