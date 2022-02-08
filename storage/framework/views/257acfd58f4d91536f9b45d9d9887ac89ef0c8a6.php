

<?php $__env->startSection('container'); ?>

    <h1 class="md-5">Post Categories</h1>
    <div class="row">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <a href="/post?category=<?php echo e($category->slug); ?>">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/720x400?<?php echo e($category->name); ?>" alt="<?php echo e($category->name); ?>" class="img-fluid">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4f fs-3" style="background-color: rgb(0, 0, 0, 0.7)"> <?php echo e($category->name); ?></h5>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/indra/Laravel/latihan-app/resources/views/categories.blade.php ENDPATH**/ ?>