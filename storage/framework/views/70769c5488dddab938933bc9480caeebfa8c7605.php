

<?php $__env->startSection('container'); ?>

<h1 class="mb-5 text-center"><?php echo e($title); ?></h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/post">
            <?php if(request('category')): ?>
                <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
            <?php endif; ?>
            <?php if(request('author')): ?>
                <input type="hidden" name="category" value="<?php echo e(request('author')); ?>">
            <?php endif; ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search...." name="search" value="<?php echo e(request('search')); ?>">
                <button class="btn btn-danger" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>

<?php if($posts->count()): ?>
    <div class="card mb-3">
        <?php if($posts[0]->image): ?>
            <div style="max-height: 400px; overflow: hidden;">
                <img src="<?php echo e(asset('storage/'.$posts[0]->image)); ?>" class="card-img-top" alt="<?php echo e($posts[0]->category->name); ?>" class="img-fluid">
            </div>
        <?php else: ?>    
            <img src="https://source.unsplash.com/1200x400?<?php echo e($posts[0]->category->name); ?>" class="card-img-top" alt="<?php echo e($posts[0]->category->name); ?>">
        <?php endif; ?>
        <div class="card-body text-center">
        <h5 class="card-title"><a href="/post/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none text-dark"><?php echo e($posts[0]->title); ?></a></h5>
        <p>
            <small class="text-muted">  
                By <a href="/post?author=<?php echo e($posts[0]->author->username); ?>" class="text-decoration-none">
                <?php echo e($posts[0]->author->name); ?></a> In <a href="/post?category=<?php echo e($posts[0]->category->slug); ?>" 
                    class="text-decoration-none"><?php echo e($posts[0]->category->name); ?> </a> <?php echo e($posts[0]->created_at->diffForHumans()); ?>

            </small>
        </p>
        <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>
        <a href="/post/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none btn btn-primary">read more</a>
        </div>
    </div>

<div class="container">
    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute text-white px-3 py-1" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/post?category=<?php echo e($post->category->slug); ?>" class="text-white text-decoration-none"><?php echo e($post->category->name); ?></a></div>
                <?php if($post->image): ?>
                    <img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="<?php echo e($post->category->name); ?>" class="img-fluid">
                <?php else: ?>    
                    <img src="https://source.unsplash.com/500x400?<?php echo e($post->category->name); ?>" class="card-img-top" alt="<?php echo e($post->category->name); ?>">
                <?php endif; ?>
                <div class="card-body">
                  <h5 class="card-title"><a href="/post/<?php echo e($post->slug); ?>" class="text-decoration-none text-dark"><?php echo e($post->title); ?></a></h5>
                  <p>
                    <small class="text-muted">  
                        By <a href="/post?author=<?php echo e($post->author->username); ?>" class="text-decoration-none">
                        <?php echo e($post->author->name); ?></a> <?php echo e($post->created_at->diffForHumans()); ?>

                    </small>
                </p>
                  <p class="card-text"><?php echo e($post->excerpt); ?></p>
                  <a href="/post/<?php echo e($post->slug); ?>" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php else: ?>

    <p class="text-center fs-4">No Post Found.</p>

<?php endif; ?>

<div class="d-flex justify-content-center">
<?php echo e($posts->links()); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/indra/Laravel/latihan-app/resources/views/post.blade.php ENDPATH**/ ?>