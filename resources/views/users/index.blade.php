<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($users as $user)
                <div class='post'>
                    <a href="/follow/{{ $user->id }}"><h2>フォロー</h2></a>
                    <a href="/follower/{{ $user->id }}"><h2>フォロワー</h2></a>
                    <h2 class='title'>{{ $user->name }}</h2>
                    <p class='body'>{{ $user->email }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>