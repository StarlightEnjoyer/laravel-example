<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Something-something</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <div class="content-wrapper">
        <header>
            <div class="logo">
                <a href="/new_first">
                    <img src="<?php echo e(Vite::asset('resources/images/logo.png')); ?>">
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
            <div class="main-content-grid">
                <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <img src="<?php echo e(Vite::asset('resources/images/'.$product['path'])); ?>">
                        <h2><?php echo e($product['title']); ?></h2>
                        <h2><?php echo e($product['price']); ?></h2>
                    </div>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </div>
        </div>
        <footer>
            <p>&copy; Чипизубов Кирилл Игоревич, 2026</p>
        </footer> 
    </div> 
</body>
</html><?php /**PATH D:\xampp\htdocs\example-app\resources\views/array.blade.php ENDPATH**/ ?>