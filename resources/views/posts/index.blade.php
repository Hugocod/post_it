<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    </head>

    <body>

        @foreach ($posts as $post)

            <div class="card">
                <h1>{{$post['title']}}</h1>
                <p>{{$post['description']}}</p>
            </div>

        @endforeach

    </body>

</html>
