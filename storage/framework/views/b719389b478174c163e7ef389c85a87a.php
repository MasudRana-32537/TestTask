<?php $__env->startSection('title','Recycle Project'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <button type="button" id="restore-selected" class="btn btn-primary">Restore Selected</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form id="restore-form">
                        <table id="deleted-projects-table" class="table table-bordered">
                            <thead>
                            <tr>
                                <th><input type="checkbox" id="select-all"></th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $recycleProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><input type="checkbox" name="project_ids[]" value="<?php echo e($project->id); ?>"></td>
                                    <td><?php echo e($project->id); ?></td>
                                    <td><?php echo e($project->name); ?></td>
                                    <td><?php echo e($project->address); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $('#select-all').click(function() {
            $('input[name="project_ids[]"]').prop('checked', this.checked);
        });

        $('#restore-selected').click(function() {
            let selectedIds = $('input[name="project_ids[]"]:checked').map(function() {
                return $(this).val();
            }).get();

            if (selectedIds.length > 0) {
                $.ajax({
                    url: '<?php echo e(route("projects.restore-selected")); ?>',
                    method: 'POST',
                    data: {
                        project_ids: selectedIds,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            location.reload(); // Reload to update the list
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('An error occurred while restoring projects.');
                    }
                });
            } else {
                alert('Please select at least one project to restore.');
            }
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PHP-8.2.4\htdocs\test-project\resources\views/project/recycle_bin.blade.php ENDPATH**/ ?>