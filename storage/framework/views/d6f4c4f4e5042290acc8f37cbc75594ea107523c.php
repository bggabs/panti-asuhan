<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Oct 2022 11:00:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <title>Dashboard Panti Asuhan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
    <div class="container-fluid">
        <div class="text-center">
            <h3>Data Donasi Uang</h3>
        </div>

        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Tipe Pembayaran</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($donation->user->name); ?></td>
                    <td><?php echo e($donation->payment_type); ?></td>
                    <td><?php echo e($donation->description); ?></td>
                    <td><?php echo e(\Carbon\Carbon::parse($donation->date)->format('d M Y')); ?></td>
                    <td>Rp.<?php echo e(number_format($donation->amount)); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

</body>
</html>
<?php /**PATH C:\Users\Hewlett Packard\OneDrive\Documents\GitHub\panti-asuhan\panti-asuhan\resources\views/dashboard/pages/donation/printMoneyDonation.blade.php ENDPATH**/ ?>