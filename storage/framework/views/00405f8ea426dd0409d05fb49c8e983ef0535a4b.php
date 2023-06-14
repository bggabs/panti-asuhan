

<?php $__env->startSection('content'); ?>
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Selamat Datang, <?php echo e(auth()->user()->name); ?></h1>

        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\panti-asuhan\resources\views/dashboard/pages/index.blade.php ENDPATH**/ ?>