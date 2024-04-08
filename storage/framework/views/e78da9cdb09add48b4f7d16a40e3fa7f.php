<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <p>
                 <a href="<?php echo e(route('update.page',['id' => $user -> id , 'nom'=>  $user -> nom])); ?>"> <?php echo e($user -> nom); ?> <?php echo e($user -> annee); ?></a>
           </p>
           
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html>
<?php /**PATH E:\Web\Préparation évalStage\Framework\Laravel\premierLaravel\resources\views/welcome.blade.php ENDPATH**/ ?>