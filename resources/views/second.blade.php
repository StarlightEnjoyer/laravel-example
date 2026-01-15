<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel stuff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1><..<</h1>
    <a href="/new_first">Первая страница</a>
    @foreach ($users as $user)
        <div><h2>{{$user -> name}}</h2><h2>{{$user -> email}}</h2></div>    
    @endforeach
</body>
</html>