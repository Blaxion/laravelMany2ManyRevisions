<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
</head>

<body>
    <section class="mb-5 pb-5">
        <h1>ARTICLES</h1>
        <div class="container">
            @foreach ($articles as $article)
                <div class="card w-75">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->name}}</h5>
                        @foreach ($article->tags as $tag)
                        <a  class="btn btn-primary rounded rounded-pill" >{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mt-5 pt-5">
        <h1>TAGS</h1>
        <div class="container">
            @foreach ($tags as $tag)
                <div class="card w-75">
                    <div class="card-body">
                        <h5 class="card-title">{{$tag->name}}</h5>
                        @foreach ($tag->articles as $article)
                        <a  class="btn btn-primary rounded rounded-pill" >{{$article->name}}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</body>

</html>
