<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Boolpress</title>
</head>

{{-- @php
dd($posts);
@endphp --}}

<body>
    <div class="container">
        @include('partials/header')
        <main class="container">
            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
                <div class="col-md-12 px-0">
                    <h1 class="display-4 font-italic">{{ $posts[0]['title'] }}</h1>
                    <p class="lead my-3">{{ Str::limit($posts[0]['content'], 250) }}</p>
                    <p class="lead mb-0"><a href="{{ route('show', $posts[0]['slug']) }}"
                            class="text-white font-weight-bold">Continue reading...</a>
                    </p>
                </div>
            </div>
            <div class="row mb-2">
                @for ($i = 1; $i < 3; $i++)
                    <div class="col-md-6">
                        <div
                            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0">{{ $posts[$i]['title'] }}</h3>
                                <div class="mb-1 text-muted">{{ $posts[$i]['created_at'] }}</div>
                                <p class="card-text mb-auto">{{ Str::limit($posts[$i]['content'], 150) }}</p>
                                <a href="{{ route('show', $posts[$i]['slug']) }}" class="stretched-link">Continue
                                    reading</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img width="200" height="100%" style="object-fit: cover; object-position: center;"
                                    src="{{ $posts[$i]['url_thumb'] }}" alt="{{ $posts[$i]['title'] }}">
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="row">
                <div class="col-md-8 blog-main">
                    @for ($i = 3; $i < count($posts); $i++)
                        <div class="blog-post">
                            <h2 class="blog-post-title">{{ $posts[$i]['title'] }}</h2>
                            <p class="blog-post-meta">{{ $posts[$i]['created_at'] }}</a></p>
                            {{ $posts[$i]['content'] }}
                            <hr>
                        </div>
                    @endfor
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
