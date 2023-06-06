<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    

    <?php $__env->startSection('content'); ?>
      <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kodeBarang" class="form-label">Kode Barang</label>
                        <h5><?php echo e($barang->kode_barang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="namaBarang" class="form-label">Nama Barang</label>
                        <h5><?php echo e($barang->nama_barang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="hargaBarang" class="form-label">hargaBarang</label>
                        <h5><?php echo e($barang->harga_barang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                        <h5><?php echo e($barang->deskripsi); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuanBarang" class="form-label">Satuan Barang</label>
                        <h5><?php echo e($barang->satuan->nama_satuan); ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="<?php echo e(route('barangs.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Iqbal hakam hafidz\OneDrive\Desktop\Percobaan3\resources\views/barang/show.blade.php ENDPATH**/ ?>