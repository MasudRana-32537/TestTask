<nav class="main-header navbar navbar-expand text-sm  <?php echo e(auth()->user()->theme_mode == 1 ? 'navbar-white' : 'navbar-dark'); ?>  navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <h3 class="nav-link font-weight-bold active"
                style="color: #007bff;font-size: 22px;margin: 0"><?php echo e(config('app.name')); ?>

            </h3>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <img height="30" class="img-circle" src="<?php echo e(asset(file_exists(auth()->user()->profile_photo) ? auth()->user()->profile_photo : 'themes/backend/dist/img/avatar.png')); ?>"
                     alt=""> <?php echo e(auth()->user()->name ?? ''); ?> <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">










                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                    </a>
                </form>

            </div>
        </li>
    </ul>
</nav>
<?php /**PATH D:\PHP-8.2.4\htdocs\test-project\resources\views/layouts/partial/__navbar.blade.php ENDPATH**/ ?>