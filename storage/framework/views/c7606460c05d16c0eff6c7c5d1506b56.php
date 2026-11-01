

<?php $__env->startSection('title', 'Task List'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Task List</h1>

    <p>All tasks, ordered from earliest to latest.</p>
    <p>Total tasks: <?php echo e($tasks->count()); ?></p>

    <table>
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
            </tr>
        </thead>

        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($task->title); ?></td>
                    <td><?php echo e(ucfirst($task->status)); ?></td>
                    <td><?php echo e($task->task_date->format('F j, Y')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="3">No tasks found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Rowgene Gales\Documents\WebSys_Laravel\TSA3\resources\views/tasks.blade.php ENDPATH**/ ?>