<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container-fluid">

        <div class="row d-flex justify-content-center">
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row d-flex justify-content-center">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
                </div>
            <?php endif; ?>
        </div>


















    </div>
</body>

</html>
<?php unset($_SESSION['error']) ?>
<?php unset($_SESSION['success']) ?>