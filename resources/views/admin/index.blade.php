@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Section</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="{{ route('admin.posts.index') }}">Posts</a></td>
                    <td><a href="{{ route('admin.posts.create') }}">New Post</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
