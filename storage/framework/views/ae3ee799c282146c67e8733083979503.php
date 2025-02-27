<?php
$subMenu = [
    'projects.index', 'projects.create', 'projects.edit','projects.recycle'
];
?>
<li class="nav-item <?php echo e(in_array(Route::currentRouteName(), $subMenu) ? 'menu-open' : ''); ?>">
    <a href="#"
       class="nav-link <?php echo e(in_array(Route::currentRouteName(), $subMenu) ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-project-diagram"></i>
        <p>
            Project Settings
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <?php
        $subSubMenu = ['projects.index', 'projects.create', 'projects.edit'];
        ?>
        <li class="nav-item">
            <a href="<?php echo e(route('projects.index')); ?>"
               class="nav-link <?php echo e(in_array(Route::currentRouteName(), $subSubMenu) ? 'active' : ''); ?>">
                <i class="far  <?php echo e(in_array(Route::currentRouteName(), $subSubMenu) ? 'fa-check-circle' : 'fa-circle'); ?> nav-icon"></i>
                <p>Projects</p>
            </a>
        </li>
    </ul>
</li>
<?php /**PATH D:\PHP-8.2.4\htdocs\test-project\resources\views/layouts/menu/__projects.blade.php ENDPATH**/ ?>