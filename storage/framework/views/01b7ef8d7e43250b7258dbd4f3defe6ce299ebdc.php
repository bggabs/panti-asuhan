
<?php $__env->startSection('content'); ?>
    <main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Halaman Profile</h1>

        <div class="row">
            <div class="col-md-4 col-xl-4">

                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile</h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="<?php echo e(asset('storage/' . $profile->logo)); ?>" alt="Stacie Hall" class="img-fluid rounded-circle mb-2" width="150" height="150">
                        <h5 class="card-title mb-0"><?php echo e($profile->name); ?></h5>
                        <div class="text-muted mb-2"><?php echo e($profile->email); ?></div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <h5 class="h6 card-title">Detail</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home feather-sm me-1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> <?php echo e($profile->address); ?></li>

                            <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase feather-sm me-1"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg> <?php echo e($profile->phone_number); ?></li>
                        </ul>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <h5 class="h6 card-title">Sosial Media</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><span class="fab fa-twitter fa-fw me-1"></span> <a href="<?php echo e($profile->twitter); ?>">Twitter</a></li>
                            <li class="mb-1"><span class="fab fa-facebook fa-fw me-1"></span> <a href="<?php echo e($profile->facebook); ?>">Facebook</a></li>
                            <li class="mb-1"><span class="fab fa-instagram fa-fw me-1"></span> <a href="<?php echo e($profile->instagram); ?>">Instagram</a></li>
                            <li class="mb-1"><span class="fab fa-youtube fa-fw me-1"></span> <a href="<?php echo e($profile->youtube); ?>">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-xl-8">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account" role="tabpanel">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message">
                                    <strong>Sukses!</strong> <?php echo e(session('success')); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('dashboard.profile.update', $profile->id)); ?>"
                                      enctype="multipart/form-data">
                                    <?php echo method_field('PATCH'); ?>
                                    <?php echo csrf_field(); ?>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Nama</label>
                                            <input type="text" value="<?php echo e($profile->name); ?>" name="name" class="form-control" placeholder="Nama">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label w-100">Logo</label>
                                            <input class="form-control" type="file" name="logo">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Email</label>
                                            <input type="email" value="<?php echo e($profile->email); ?>" name="email" class="form-control" placeholder="Nama">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Nomor Telepon</label>
                                            <input type="text" value="<?php echo e($profile->phone_number); ?>" name="phone-number" class="form-control" placeholder="Nama">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Alamat</label>
                                            <textarea class="form-control" placeholder="Textarea" name="address" rows="3"><?php echo e($profile->address); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Instagram</label>
                                            <input type="text" name="instagram" value="<?php echo e($profile->instagram); ?>" class="form-control" placeholder="Nama">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Facebook</label>
                                            <input type="text" name="facebook" value="<?php echo e($profile->facebook); ?>" class="form-control" placeholder="Nama">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Twitter</label>
                                            <input type="text" name="twitter" value="<?php echo e($profile->twitter); ?>" class="form-control" placeholder="Nama">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Youtube</label>
                                            <input type="text" name="youtube" value="<?php echo e($profile->youtube); ?>" class="form-control" placeholder="Nama">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Perbarui profil</button>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\panti-asuhan\resources\views/dashboard/pages/profiles/index.blade.php ENDPATH**/ ?>