

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Profile</h1>

    <?php if($user): ?>
        <p>
            <strong>Username:</strong>
            <?php echo e($user->username); ?>

        </p>

        <p>
            <strong>Full name:</strong>
            <?php echo e($user->full_name); ?>

        </p>

        <p>
            <strong>Email:</strong>
            <?php echo e($user->email); ?>

        </p>
    <?php else: ?>
        <p>No user profile found.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Rowgene Gales\Documents\WebSys_Laravel\TSA3\resources\views/profile.blade.php ENDPATH**/ ?>