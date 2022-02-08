

<?php $__env->startSection('container'); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="mb-5 border-bottom pb-4">
        <h2> 
            <a href="/post/<?php echo e($post->slug); ?>" class="text-decoration-none"><?php echo e($post->title); ?></a>
        </h2>
        <p>By <a href="/authors/<?php echo e($post->user->username); ?>" class="text-decoration-none">
            <?php echo e($post->user->name); ?></a> In <a href="/categories/<?php echo e($post->category->slug); ?>" 
                class="text-decoration-none"><?php echo e($post->category->name); ?> </a></p>
        <p> <?php echo e($post->excerpt); ?></p>

        <a href="/post/<?php echo e($post->slug); ?>" class="text-decoration-none">read more....</a>
    </article>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/indra/Laravel/latihan-app/resources/views/author.blade.php ENDPATH**/ ?>