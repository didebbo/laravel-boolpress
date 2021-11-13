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
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-center align-items-center">
                <div class="col-4 text-center">
                    <h1>
                        <a class="blog-header-logo text-dark" href="#">Boolpress</a>
                    </h1>
                </div>
            </div>
        </header>
        <main class="container">
            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly
                        and efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a>
                    </p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div
                        class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">Featured post</h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 blog-main">
                    <h3 class="pb-4 mb-4 font-italic border-bottom">
                        From the Firehose
                    </h3>
                    @for ($i = 0; $i < 20 - 3; $i++)
                        <div class="blog-post">
                            <h2 class="blog-post-title">Sample blog post</h2>
                            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                            <p>This blog post shows a few different types of content that’s supported and styled with
                                Bootstrap. Basic typography, images, and code are all supported.</p>
                            <hr>
                            <p>Yeah, she dances to her own beat. Oh, no. You could've been the greatest. 'Cause, baby,
                                <a href="#">you're a firework</a>. Maybe a reason why all the doors are closed. Open up
                                your heart and just let it begin. So très chic, yeah, she's a classic.
                            </p>
                            <blockquote>
                                <p>Bikinis, zucchinis, Martinis, no weenies. I know there will be sacrifice but that's
                                    the price. <strong>This is how we do it</strong>. I'm not sticking around to watch
                                    you go down. You think you're so rock and roll, but you're really just a joke. I
                                    know one spark will shock the world, yeah yeah. Can't replace you with a million
                                    rings.</p>
                            </blockquote>
                            <p>Trying to connect the dots, don't know what to tell my boss. Before you met me I was
                                alright but things were kinda heavy. You just gotta ignite the light and let it shine.
                                Glitter all over the room <em>pink flamingos</em> in the pool. </p>
                            <h2>Heading</h2>
                            <p>Suiting up for my crowning battle. If you only knew what the future holds. Bring the beat
                                back. Peach-pink lips, yeah, everybody stares.</p>
                            <h3>Sub-heading</h3>
                            <p>You give a hundred reasons why, and you say you're really gonna try. Straight stuntin'
                                yeah we do it like that. Calling out my name. ‘Cause I, I’m capable of anything.</p>
                            <pre><code>Example code block</code></pre>
                            <p>Before you met me I was alright but things were kinda heavy. You just gotta ignite the
                                light and let it shine.</p>
                            <h3>Sub-heading</h3>
                            <p>You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh,
                                fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your
                                heart out.</p>
                            <ul>
                                <li>Got a motel and built a fort out of sheets.</li>
                                <li>Your kiss is cosmic, every move is magic.</li>
                                <li>Suiting up for my crowning battle.</li>
                            </ul>
                            <p>Takes you miles high, so high, 'cause she’s got that one international smile.</p>
                            <ol>
                                <li>Scared to rock the boat and make a mess.</li>
                                <li>I could have rewrite your addiction.</li>
                                <li>I know you get me so I let my walls come down.</li>
                            </ol>
                            <p>After a hurricane comes a rainbow.</p>
                        </div>
                    @endfor
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
