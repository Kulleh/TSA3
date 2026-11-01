<?php $__env->startSection('title', 'Welcome'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Tasks for Today</h1>

    <p><?php echo e($today->format('F j, Y')); ?></p>
    <p>Tasks today: <?php echo e($tasks->count()); ?></p>

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
                    <td colspan="3">No tasks scheduled for today.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Rowgene Gales\Documents\WebSys_Laravel\TSA3\resources\views/welcome.blade.php ENDPATH**/ ?>