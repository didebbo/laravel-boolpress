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
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category['id'] }}</th>
                        <td><a href="{{ route('admin.categories.show', $category['id']) }}">{{ $category['title'] }}</a>
                        </td>
                        <td>{{ $category['slug'] }}</td>
                        <td>{{ $category['created_at'] }}</td>
                        <td>{{ $category['updated_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
