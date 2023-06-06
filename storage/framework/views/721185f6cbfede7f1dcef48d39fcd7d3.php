<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><i class="bi bi-box-fill"></i> Peminjaman</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="">Data barang masuk</a></li>
                  <li><a class="dropdown-item" href="">Data barang keluar</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="<?php echo e(route('barangmasuk.create')); ?>" class="btn btn-primary">Create Barang Masuk</a>
                </div>
            </div>
        </div>
        <hr>
    <section class="content">
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr style="text-align: center; background-color:#20a8d8; color:#2f353a;">
                        <th>Pengirim </th>
                        <th>Nama Barang </th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $masuks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $masuk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="text-align: center;">
                        <td><?php echo e($masuk -> Pengirim); ?></td>
                        <td><?php echo e($masuk -> NamaBarang); ?></td>
                        <td><?php echo e($masuk -> Jumlah); ?></td>
                        <td><?php echo e($masuk -> Tanggal); ?></td>
                        <td><?php echo e($masuk -> Prodi->name); ?></td>
                        <td>
                            <div class="d-flex">
                                
                                <a href="<?php echo e(route('barangmasuk.edit', ['barangmasuk' =>$masuk->id ])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="<?php echo e(route('barangmasuk.destroy', ['barangmasuk' =>$masuk->id ])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </section>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\Iqbal hakam hafidz\OneDrive\Desktop\Percobaan3\resources\views/barangmasuk/index.blade.php ENDPATH**/ ?>