<?php include '../../config/session.php'; ?>
<?php include '../include/header.php'; ?>
<?php include '../include/nav.php'; ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <?php if(isset($_SESSION['error'])): ?>
            <div class="col-sm-12 col-md-8 col-lg-6">
                <div class="alert alert-danger"><?=$_SESSION['error'] ?></div>
            </div>
            <?php endif; ?>
        </div>
        <div class="row d-flex justify-content-center">
            <?php if(isset($_SESSION['success'])): ?>
            <div class="col-sm-12 col-md-8 col-lg-6">
                <div class="alert alert-success"><?=$_SESSION['success'] ?></div>
            </div>
            <?php endif; ?>
        </div>

        <div class="row d-flex justify-content-center mt-5">
            <div class="col-sm-12 col-md-8 col-lg-6">
                <form action="../../controller/main/register.php" method="post">
                    <div class="card">
                        <div class="card-header text-center fw-bold fs-2">
                            Create Account 
                        </div>
                        <div class="card-body">
                            <label for="fname">First Name</label>
                            <input class="form-control" placeholder="Enter First Name" value="<?=$_SESSION['fname'] ?? ''?>" type="text" name="fname" id="">
                            <label for="lname">Last Name</label>
                            <input class="form-control" placeholder="Enter Last Name" value="<?=$_SESSION['lname'] ?? ''?>" type="text" name="lname" id="">
                            <label for="username">Enter Username</label>
                            <input class="form-control" placeholder="Enter Username" value="<?=$_SESSION['username'] ?? ''?>" type="text" name="username" id="">
                            <label for="email">Enter Email</label>
                            <input class="form-control" placeholder="Enter Email Address" value="<?=$_SESSION['email'] ?? ''?>" type="email" name="email" id="">
                            <label for="password">Enter Password</label>
                            <input class="form-control" placeholder="Enter Password" type="password" name="password" id="">
                        </div>
                        <div class="card-footer text-center">
                            <button class="btm rounded primary_color p-2" type="submit" name="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include '../include/footer.php'; ?>
<?php unset($_SESSION['error']) ?>
<?php unset($_SESSION['success']) ?>