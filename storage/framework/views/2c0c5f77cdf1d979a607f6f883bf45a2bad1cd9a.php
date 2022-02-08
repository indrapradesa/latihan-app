<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post, <?php echo e(auth()->user()->name); ?></h1>
  </div>

  <?php if(session()->has('success')): ?>
    <div class="alert alert-success col-lg-8" role="alert">
    <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary btn-sm">Created New post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td><?php echo e($post->title); ?></td>
              <td><?php echo e($post->category->name); ?></td>
              <td>
                  <a href="/dashboard/posts/<?php echo e($post->slug); ?>" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/posts/<?php echo e($post->slug); ?>" method="post" class="d-inline">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span></button>
                  </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/indra/Laravel/latihan-app/resources/views/dashboard/posts/index.blade.php ENDPATH**/ ?>