<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elecciones</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" 
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" 
            crossorigin="anonymous">
    </script>
    <script type= "text/javascript"
             src ="<?php echo e(URL::asset('js/generic.js')); ?>">

    </script>    
</head>

<body>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
</body>

</html><?php /**PATH /var/www/html/proyecto_laravel/resources/views/plantilla.blade.php ENDPATH**/ ?>