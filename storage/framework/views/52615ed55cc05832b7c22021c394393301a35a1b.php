<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">Halaman Post</h1>
            <article>
                <p>By <a href="/post?author=<?php echo e($posts->author->username); ?>" class="text-decoration-none"><?php echo e($posts->author->name); ?></a> in <a href="/post?category=<?php echo e($posts->category->slug); ?>" class="text-decoration-none"><?php echo e($posts->category->name); ?></a></p>
                <?php if($posts->image): ?>
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="<?php echo e(asset('storage/'.$posts->image)); ?>" alt="<?php echo e($posts->category->name); ?>" class="img-fluid mt-3">
                    </div>
                <?php else: ?>    
                        <img src="https://source.unsplash.com/720x400?<?php echo e($posts->category->name); ?>" alt="<?php echo e($posts->category->name); ?>" class="img-fluid mt-3">
                <?php endif; ?>
                <article class="my-3 fs-5">
               <?php echo $posts->body; ?> 
               
                </article>
            </article>
        
            <a href="/post" class="d-block mt-3"> Back to Post</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/indra/Laravel/latihan-app/resources/views/posts.blade.php ENDPATH**/ ?>