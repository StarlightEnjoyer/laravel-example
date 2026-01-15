<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel stuff</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <h1>>..></h1>
    <a href="/new_second">Вторая страница</a>
    <p>Сумма чисел <?php echo e($a); ?> и <?php echo e($b); ?> = <?php echo e($a + $b); ?></p>
    <?php if($a % 2 == 0): ?>
        <p>Число а - четное</p>
    <?php else: ?>
        <p>Число а - нечетное</p>
    <?php endif; ?>
</body>
</html><?php /**PATH D:\xampp\htdocs\example-app\resources\views/first.blade.php ENDPATH**/ ?>