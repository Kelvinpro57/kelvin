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



    <div class="row">
        <??>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body scale">
                    <img src="../../public/img/course.jpg" alt="" width="100%">
                </div>
                <div class="card-footer">
                    <div class="text-center fw-bold fs-4 scale mt-2">Graphic Designing</div>
                    <div class="d-flex justify-content-between mt-2 detail_color rounded">
                        <div>1.49 Hrs</div>
                        <div>|</div>
                        <div>John Doe</div>
                        <div>|</div>
                        <div>30 Students</div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class=""><a href=""><button class="bg-primary text-white">Details</button></a></div>
                        <div class=""><a href=""><button class="bg-primary text-white">Join Now</button></a></div>
                    </div>
                </div>
            </div>
        </div>
        <??>
    </div>





</div>
<?php include '../include/footer.php'; ?>
<?php unset($_SESSION['error']) ?>
<?php unset($_SESSION['success']) ?>