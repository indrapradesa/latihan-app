<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#">Latihan Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php echo e(($active == 'home' ? 'active' : '' )); ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($active == 'about' ? 'active' : '' )); ?>" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($active == 'blog' ? 'active' : '' )); ?>" href="/post">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($active == 'categories' ? 'active' : '' )); ?>" href="/categories">Categories</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
              <?php if(auth()->guard()->check()): ?>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome Back <?php echo e(auth()->user()->name); ?>

                  </a>
                  <ul class="dropdown-menu" aria-label="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="POST">
                          <?php echo csrf_field(); ?>
                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                  </ul>
              </li>
                  <?php else: ?>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(($active == 'login' ? 'active' : '' )); ?>" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
              <?php endif; ?>
            </ul>
      </div>
    </div>
  </nav>
<?php /**PATH /home/indra/Laravel/latihan-app/resources/views/partials/navbar.blade.php ENDPATH**/ ?>