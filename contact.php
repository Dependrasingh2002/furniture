<?php include "layout/header.php";
include "dbconnect/config.php";
$fnameerr=$lnameerr=$emailerr=$meserr='';
if($_SERVER['REQUEST_MEYHOD']=='POST'){
    if(empty($_POST['firstname']) || $_POST['firstname']==''){
        $fnameerr="Please enter your name";
    }
    else if(empty($_POST['lastname']) || $_POST['lastname']==''){
        $fnameerr="Please enter last name";
    }
    else if(empty($_POST['email']) || $_POST['email']==''){
        $fnameerr="Please enter your email";
    }
    else if(empty($_POST['message']) || $_POST['message']==''){
        $fnameerr="Please enter your name";
    }
    else{
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $query ="Insert Into contact (firstname,lastname,email,message) value('$fname','$lname','$email','$message')";
        if(mysqli_query($cont,$query)){
            echo "<script>
            alert('Your query send succsessfully. you get response through email');
            form.reset();
            </script>";
        }
    }

}

?>
<!-- hero section start -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="hero-content">
                    <h1 class="hero-heading pb-4 fs-1 fw-bold">Services</h1>
                    <p class="hero-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                        Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                    <button class="btn btn-warning rounded-pill px-4 py-2 ">Shop Now</button>
                    <button class="btn  rounded-pill px-4 py-2 btn-techsima">Explore</button>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="hero-image">
                    <img src="images/couch.png" alt="hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero section End -->
<!-- Contact Section start -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-12 col-sm-12"></div>
            <div class="col-lg-10 contact-info col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-3  col-md-3 col-sm-3 contact-icon">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="col-lg-9  col-md-9 col-sm-9 contact-icon">
                                <p>In front of Rajarshi Dashrath Rajkiya Medical College, Darshan Nagar, Kushmaha,
                                    Ayodhya, Uttar Pradesh 224135</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-9 contact-icon">
                                <span><i class="fa-solid fa-envelope"></i></span>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 contact-icon">
                                <p>
                                    <a href="mailto:techsimatraining@gmail.com">techsimatraining@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-3  col-md-3 col-sm-9 contact-icon">
                                <span> <i class="fa-solid fa-phone"></i></span>
                            </div>
                            <div class="col-lg-9 contact-icon  col-md-9 col-sm-9 ">
                                <p>
                                    <a href="tel:8604488807">8604488807</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="row g-3 mt-4 contact-form">
                    <div class="col-lg-6 col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control news-field" name="first name"  id="fname">
                        <small><? $fnameerr; ?></small>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="email" class="form-control news-field" name="last name" id="lname">
                        <small><? $lnameerr; ?></small>
                    </div>
                    <div class="col-lg-12">
                    <label for="lname">Email</label>
                        <input type="email" class="form-control news-field" name="email" id="email">
                        <small><? $emailerr; ?></small>
                    </div>
                    <div class="col-lg-12">
                        <label for="msg">Message</label>
                        <textarea name="message" id="msg" class="form-control" rows="5" style="resize:none;"></textarea>
                        <small><? $fnameerr; ?></small>
                    </div>
                     <div class="col-auto">
                        <button type="submit" class="btn  mb-3 px-4 rounded-pill text-white news-field bg-dark" style="background:#3b5d50;">
                        Send Message    
                    </button>
                    </div> 
                </form>
            </div>

        </div>

        <div class="col-lg-1 col-md-12 col-sm-12"></div>
    </div>
    </div>
</section>
<!-- Contact Section end -->

<?php include "layout/footer.php"; ?>