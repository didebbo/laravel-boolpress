@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.categories.update', $category['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp"
                    placeholder="Title" value="{{ old('title') ? old('title') : $category['title'] }}">
                @error('title')
                    <small id="titleHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.categories.index', $category['id']) }}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
