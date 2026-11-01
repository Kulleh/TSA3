<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title', 'Tasks for Today'); ?></title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        nav a {
            color: #2563eb;
            text-decoration: none;
        }

        main {
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #eaf0ff;
        }
    </style>
</head>
<body>
    <nav aria-label="Main navigation">
        <a href="<?php echo e(route('welcome')); ?>">Welcome</a>
        <a href="<?php echo e(route('tasks')); ?>">Task List</a>
        <a href="<?php echo e(route('profile')); ?>">Profile</a>
        <a href="<?php echo e(route('about')); ?>">About</a>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html><?php /**PATH C:\Users\Rowgene Gales\Documents\WebSys_Laravel\TSA3\resources\views/layouts/app.blade.php ENDPATH**/ ?>