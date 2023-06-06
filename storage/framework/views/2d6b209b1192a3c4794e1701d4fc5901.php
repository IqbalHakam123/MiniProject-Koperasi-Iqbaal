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
    

    <?php $__env->startSection('content'); ?>
    <div class="container-sm mt-5">
        <form action="<?php echo e(route('barangs.update', ['barang' => $barang->id])); ?>" method="POST" class="needs-validation" novalidate="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row justify-content-center">
                <div class="p-5 bg-warning rounded-3 border col-xl-6">
                    
                    <div class="mb-3 text-center">
                        <i class="bi bi-pencil-square fs-1"></i>
                        <h4>Edit Barang Masuk</h4>
                        <hr>
                        <br>
                    </div>
                    <article class="row">
                        <div class="col-12 mb-2">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['kodeBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kodeBarang" id="kodeBarang" value="<?php echo e($errors->any() ? old('kodeBarang') : $barang->kode_barang); ?>" placeholder="Masukan kode Barang">
                            <?php $__errorArgs = ['kodeBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control <?php $__errorArgs = ['namaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="namaBarang" id="namaBarang" value="<?php echo e($errors->any() ? old('namaBarang') : $barang->nama_barang); ?>" placeholder="Masukan nama barang">
                            <?php $__errorArgs = ['namaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control <?php $__errorArgs = ['hargaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="hargaBarang" id="hargaBarang" value="<?php echo e($errors->any() ? old('hargaBarang') : $barang->harga_barang); ?>" placeholder="Harga barang">
                            <?php $__errorArgs = ['hargaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="deskripsi" class="form-label">Deskripsi </label>
                            <input type="text" class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="deskripsi" id="deskripsi" value="<?php echo e($errors->any() ? old('deskripsi') : $barang->deskripsi); ?>"" placeholder="Deskripsi">
                            <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="satuanBarang" class="form-label">Progam Studi</label>
                            <select name="satuanBarang" id="satuanBarang" class="form-select">
                                <?php
                                    $selected = "";
                                        if ($errors->any())
                                        $selected = old('satuanBarang');
                                    else {
                                        $selected = $barang->satuan_id;
                                    }
                                ?>
                                <?php $__currentLoopData = $satuans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $satuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($satuan->id); ?>" <?php echo e(old('satuanBarang') == $satuan->id ? 'selected' : ''); ?>><?php echo e($satuan->kode_satuan.' - '.$satuan->nama_satuan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['satuanBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger">
                                    <small>
                                        <?php echo e($message); ?>

                                    </small>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="<?php echo e(route('barangs.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Edit</button>
                            </div>
                        </div>
                </article>
            </div>
        </form>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Iqbal hakam hafidz\OneDrive\Desktop\Percobaan3\resources\views/barang/edit.blade.php ENDPATH**/ ?>