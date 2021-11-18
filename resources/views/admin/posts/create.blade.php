@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp"
                    placeholder="Title" value="{{ old('title') }}">
                @error('title')
                    <small id="titleHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group" hidden>
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="title" name="slug" aria-describedby="slugHelp"
                    placeholder="Slug" value="{{ old('slug') }}">
                @error('slug')
                    <small id="slugHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3" aria-describedby="contentHelp"
                    placeholder="Content...">{{ old('content') }}</textarea>
                @error('content')
                    <small id="contentHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="url_thumb">Url Thumb</label>
                <input type="text" class="form-control" id="url_thumb" name="url_thumb" aria-describedby="url_thumbHelp"
                    placeholder="Url Thumb" value="{{ old('url_thumb') }}">
                @error('url_thumb')
                    <small id="url_thumbHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="">No Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}"
                            {{ old('category_id') == $category['id'] ? 'selected' : null }}>{{ $category['title'] }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <small id="category_idHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            @foreach ($tags as $tag)
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="tags[]" id="{{ 'tag-' . $tag['id'] }}"
                        value="{{ $tag['id'] }}" @if (old('tags') && in_array($tag['id'], old('tags')))
                    checked
            @endif
            >
            <label class="form-check-label" for="{{ 'tag-' . $tag['id'] }}">{{ $tag['title'] }}</label>
    </div>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-danger">Cancel</a>
    </form>
    </div>
@endsection
