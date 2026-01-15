<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel stuff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>>..></h1>
    <a href="/new_second">Вторая страница</a>
    <p>Сумма чисел {{$a}} и {{$b}} = {{$a + $b}}</p>
    @if($a % 2 == 0)
        <p>Число а - четное</p>
    @else
        <p>Число а - нечетное</p>
    @endif
</body>
</html>