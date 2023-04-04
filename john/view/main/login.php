<?php include '../../config/session.php'; ?>
<?php include '../include/header.php'; ?>
<?php include '../include/nav.php'; ?>
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

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <form action="../../controller/main/login.php" method="post">
                <div class="card">
                    <div class="card-header text-center fs-2 fw-bold">
                        Sign In
                    </div>
                    <div class="card-body">
                        <label for="email">Enter Email</label>
                        <input class="form-control" type="email" placeholder="Enter Email Eddress" value="<?=$_SESSION['email'] ?? ''?>" name="email" id="">
                        <label for="password">Enter Password</label>
                        <input class="form-control" type="password" placeholder="Enter Password" name="password" id="">
                    </div>
                    <div class="card-footer text-center">
                        <button class="rounded primary_color btn p-2" type="submit" name="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../include/footer.php'; ?>
<?php unset($_SESSION['error']) ?>
<?php unset($_SESSION['success']) ?>