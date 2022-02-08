

<?php $__env->startSection('container'); ?>
    <h1> About Me </h1>
    <h2><?= $name ?></h2>
    <p><?= $email ?></p>
    <img src="img/<?= $image ?>" alt="<?= $name ?>" width="200" class="img-thumnail rounded-circle">    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/indra/public_html/latihan-app/resources/views/about.blade.php ENDPATH**/ ?>