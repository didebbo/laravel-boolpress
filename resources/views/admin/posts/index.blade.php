@extends('layouts.app')


@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td><a href="{{ route('admin.posts.show', $post['id']) }}">{{ $post['title'] }}</a></td>
                        <td>{{ $post['created_at'] }}</td>
                        <td>{{ $post['updated_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
