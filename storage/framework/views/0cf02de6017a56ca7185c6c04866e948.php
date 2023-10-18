<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindShelf</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
    <nav class="bg-blue-100 p-4 flex justify-between items-center">
        <div class="text-white font-bold text-xl">
            <img src="<?php echo e(asset('logo.png')); ?>" alt="" width="105px">
        </div>
        <a href="<?php echo e(route('login')); ?>" class="text-white bg-sky-700 px-4 py-2 rounded-full hover:bg-sky-900"><i class="fa fa-sign-out"></i> Tizimga Kirish</a>
    </nav>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('index-base', []);

$__html = app('livewire')->mount($__name, $__params, 'WUqoRoy', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</body>
</html><?php /**PATH D:\OSPanel\domains\mindshelf\resources\views/welcome.blade.php ENDPATH**/ ?>