@extends('layouts.app')


@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">slug</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <th scope="row">{{ $tag['id'] }}</th>
                        <td><a href="{{ route('admin.tags.show', $tag['id']) }}">{{ $tag['title'] }}</a>
                        </td>
                        <td>{{ $tag['slug'] }}</td>
                        <td>{{ $tag['created_at'] }}</td>
                        <td>{{ $tag['updated_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
