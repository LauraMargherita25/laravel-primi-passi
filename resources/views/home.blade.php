<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>
<body>
    <h1>Primi passi con Laravel</h1>
    <p>Hello World!</p>
    <nav>
        <ul>
            @foreach ($nav as $navItem)
                <li><a href="{{ route($navItem['link']) }}">{{ $navItem['text'] }}</a></li>
            @endforeach
        </ul>
    </nav>
</body>
</html>