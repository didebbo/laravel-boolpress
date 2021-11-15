<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Boolpress</title>
</head>

<body>
    {{-- test 3 --}}
    <div class="container">
        @include('partials/header')
        <main class="container">
            <div class="row">
                <div class="col-md-12 blog-main">
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{ $post['title'] }}</h2>
                        <p class="blog-post-meta">{{ $post['created_at'] }}</a></p>
                        {{ $post['content'] }}
                        <hr>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
