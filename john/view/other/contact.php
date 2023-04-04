<?php include '../include/header.php' ?>
<?php include '../include/nav.php' ?>
<div class="container-fluid">

    <div class="row mt-4">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card intro">
                <div class="card-body">
                    <div class="text-center fs-4 fw-bold">Book Library</div>
                    <div class="text-center">We have a lots of books for students to read, and some of them are for free.</div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card intro">
                <div class="card-body">
                    <div class="text-center fs-4 fw-bold">Online Classes</div>
                    <div class="text-center">Sometimes we do free online classes, to educate people about a certain course.</div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card intro">
                <div class="card-body">
                    <div class="text-center fs-4 fw-bold">Home Projects</div>
                    <div class="text-center">Sometimes we give you home projects to test your ability.</div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card intro">
                <div class="card-body">
                    <div class="text-center fs-4 fw-bold">Skilled Instructors</div>
                    <div class="text-center">We have some skilled instructors that will help you.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 contact_height">
            <div class="text-center fw-bold fs-1 mt-5">Contact Us</div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5 mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <div class="card">
                <form action="" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="fname">First Name</label>
                                <input class="form-control" placeholder="Enter Name" type="text" name="fname" id="">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="email">Email Address</label>
                                <input class="form-control" placeholder="Enter Email" type="email" name="email" id="">
                            </div>
                        </div>
                        <div class="row mt-2 d-flex justify-content-center">
                            <div class="col-sm-12 col-md-10 col-lg-10">
                                <label for="subject">Subject</label>
                                <input class="form-control" placeholder="Enter Subject" type="text" name="subject" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="docs">Write Message</label>
                                <div class="form-floating">
                                    <textarea class="form-control" name="docs" placeholder="Write Your Message Here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Your Message</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="text-center">
                                    <button class="text-white p-3 bg-primary" type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 fw-bold text-center fs-3">You can still contact us through social platform</div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <a href=""><i class="fab fa-instagram fa-3x"></i></a>
                    <a href=""><i class="fab fa-twitter fa-3x"></i></a>
                    <a href=""><i class="fab fa-telegram fa-3x"></i></a>
                    <a href=""><i class="fab fa-facebook fa-3x"></i></a>
                </div>
            </div>
        </div>
    </div>




</div>
<?php include '../include/footer.php' ?>