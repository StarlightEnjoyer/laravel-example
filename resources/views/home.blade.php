<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Something-something</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="content-wrapper">
        <header>
            <div class="logo">
                <a href="/new_first">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}">
                </a>    
            </div>
            <div class="nav">
                <div class="nav-button">
                    <a href="/new_first">Главная</a>
                </div>
                <div class="nav-button">
                    <a href="/new_second">Массивы</a>
                </div>
            </div>
        </header>
        <div class="main-content-wrapper">
            <div class="main-content">
                <img src="{{ Vite::asset('resources/images/main_content.png') }}">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui illo dolores inventore, 
                    dicta sit deleniti vel accusantium ea vero recusandae suscipit, tenetur magni. Nostrum doloribus cumque nulla quas fugiat accusamus!</p>    
            </div>
        </div>
        <footer>
            <p>&copy; Чипизубов Кирилл Игоревич, 2026</p>
        </footer> 
    </div> 
</body>
</html>