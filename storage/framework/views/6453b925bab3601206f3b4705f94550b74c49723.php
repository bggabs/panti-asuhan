

<?php $__env->startSection('content'); ?>
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Halaman Gallery</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Daftar Gallery</h5>
                            <h6 class="card-subtitle text-muted">Berisi Gallery yang ada padahalaman user.</h6>
                        </div>
                        <div class="card-body">
                            <a type="button" href="<?php echo e(route('dashboard.galeries.create')); ?>" class="btn btn-success rounded-5 mb-3">Tambah Data</a>

                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>photo</th>
                                    <th>Description</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=1;
//                                ?>
                                <?php $__currentLoopData = $galeries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($gallery->name); ?></td>



                                        <td>
                                            <a href="<?php echo e(asset('storage/' . $gallery->photo)); ?>" data-lightbox="image-1" data-title="My caption"><img src="<?php echo e(asset('storage/' . $gallery->photo)); ?>" class="img-fluid" style="max-width: 90px"></a>
                                        </td>

                                        
                                        <td><?php echo e($gallery->description); ?></td>

                                        <td><?php echo e(\Carbon\Carbon::parse($gallery->date)->format('d M Y')); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('dashboard.galeries.destroy',$gallery->id)); ?>" method="post">
                                            <a class="btn btn-info" href="<?php echo e(route('dashboard.galeries.edit',$gallery->id)); ?>"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger"><i class="align-middle" data-feather="trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })

        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            $("#datatables-reponsive").DataTable({
                responsive: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\panti-asuhan\resources\views/dashboard/pages/gallery/index.blade.php ENDPATH**/ ?>