@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', $post['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp"
                    placeholder="Title" value="{{ old('title') ? old('title') : $post['title'] }}">
                @error('title')
                    <small id="titleHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="title" name="slug" aria-describedby="slugHelp"
                    placeholder="Slug" value="{{ old('slug') ? old('slug') : $post['slug'] }}">
                @error('slug')
                    <small id="slugHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3" aria-describedby="contentHelp"
                    placeholder="Content...">{{ old('content') ? old('content') : $post['content'] }}</textarea>
                @error('content')
                    <small id="contentHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="url_thumb">Url Thumb</label>
                <input type="text" class="form-control" id="url_thumb" name="url_thumb" aria-describedby="url_thumbHelp"
                    placeholder="Url Thumb" value="{{ old('url_thumb') ? old('url_thumb') : $post['url_thumb'] }}">
                @error('url_thumb')
                    <small id="url_thumbHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option selected>No Category</option>
                    @foreach ($categories as $category)
                        @php
                            $category_id = old('category_id') ?? $post['category_id'];
                        @endphp
                        <option value="{{ $category['id'] }}" {{ $category_id == $category['id'] ? 'selected' : null }}>
                            {{ $category['title'] }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <small id="category_idHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.posts.show', $post['id']) }}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
