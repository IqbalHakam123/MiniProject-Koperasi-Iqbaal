<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Barang</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body class="home-banner-area d-flex">
    <div class="container pt-6 mt-5">
        <div class="row pt-5">
            <div class="col ps-5 ms-5 pt-5 mt-5">
                <h1 style="color:#fff; ">Koperasi Ria Ko A-Hong</h1>
                <p style="font-family: cursive;color:aliceblue;font-size:20px;">"Transformasi digital koperasi menuju bisnis modern"</p>
                <a href="<?php echo e(url("/home")); ?>" ><button type="button" class="btn btn-success">Get Started</button></a>
            </div>
            <div class="col pt-6 ps-lg-5 mt-6">
                <img src="<?php echo e(Vite::asset("resources/images/percobaan4.png")); ?>" class="img-fluid">
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>

<?php /**PATH C:\Users\Iqbal hakam hafidz\OneDrive\Desktop\Percobaan3\resources\views/welcome.blade.php ENDPATH**/ ?>