<?php $__env->startSection('content'); ?>
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Form Tambah Gallery</h5>
                            <h6 class="card-subtitle text-muted">Anda dapat menambah gallery di form ini </h6>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('dashboard.galeries.update', $gallery->id)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <input type="hidden" name="id" value="<?php echo e($gallery->id); ?>">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Nama</label>
                                        <input type="text" name="name" value="<?php echo e($gallery->name); ?>"  class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="col-6">
                                        
                                            <label class="form-label">Date</label>
                                            <input class="form-control" type="date" value="<?php echo e($gallery->date); ?>" name="date" />

                                    </div>
                                </div>

                                
                                <div class="mb-3">
                                    <label for="photo">Foto</label>
                                    <br>
                                    <img src="<?php echo e(asset('storage/' . $gallery->photo)); ?>" name="photo" style="max-width: 200px" alt="Current Photo">
                                    <br>
                                    <br>
                                    <input type="hidden" name="photo" value="<?php echo e($gallery->photo); ?>">
                                    <input type="file" class="form-control-file" id="photo" name="photo">
                                    <small>Format yang diterima: jpeg, png, jpg, gif. Ukuran maksimum file: 2MB</small>
                                </div>







                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" placeholder="Textarea" name="description" rows="3"><?php echo e($gallery->description); ?></textarea>
                                </div>
                                <div class="mt-3"></div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hewlett Packard\OneDrive\Documents\GitHub\panti-asuhan\panti-asuhan\resources\views/dashboard/pages/gallery/edit-gallery.blade.php ENDPATH**/ ?>