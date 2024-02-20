<?php 
include "layout/header.php"; 
include "dbconnect/config.php";
?>
<!-- slider start -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
        <?php
            $slider ="Select * from slider";
            $res = mysqli_query($cont,$slider);
            if(mysqli_num_rows($res)>0){
                while($slider = mysqli_fetch_assoc($res)){
                    $count++;
            

        ?>


    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $count-1;?>" class="<? $count-1==0? 'active':''?>" aria-current="true" aria-label="Slide <?= $count ?> 1"></button>
    <?php
}
}
    ?>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- slider end -->
    <!-- hero section start -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero-content">
                        <h1 class="hero-heading">Modern Integer Desine Studio</h1>
                        <p class="hero-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                            Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                        <button class="btn btn-warning rounded-pill px-4">Shop Now</button>
                        <button class="btn border rounded-pill px-4 btn-techsima ">Explore</button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-image">
                        <img src="images/couch.png" alt="hero Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section End -->
    <!-- material section start -->
    <section class="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 material-content">
                    <h2>Crafted with excellent material.</h2>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate
                        velit imperdiet dolor tempor tristique.</p>
                    <button class="btn btn-dark">Explore</button>
                </div>
                <div class="col-lg-3  material-image">
                    <img src="images/product-1.png" alt="material Image" class="img-fluid">
                    <h3 class="material-title">Nordic Chair</h3>
                    <strong class="material-price">$50.00</strong>
                </div>
                <div class="col-lg-3  material-image">
                    <img src="images/product-2.png" alt="material Image" class="img-fluid">
                    <h3 class="material-title">Kruzo Aero Chair</h3>
                    <strong class="material-price">$78.00</strong>
                </div>
                <div class="col-lg-3  material-image">
                    <img src="images/product-3.png" alt="material Image" class="img-fluid">
                    <h3 class="material-title">Ergonomic Chair</h3>
                    <strong class="material-price">$43.00</strong>
                </div>
            </div>
        </div>
    </section>
    <!-- material section end -->
    <!-- choose section start -->

    <section class="choose">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="choose-content">Why Choose Us</h2>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique.</p>
                    <div class="row">
                        <div class="col-lg-6 sub-choose">
                            <div class="choose-icon">
                                <img src="images/truck.svg" alt="choose icon" class="img-fluid">
                            </div>
                            <h3 class="choose-icon-content">Fast & Free Shipping</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                                velit. Aliquam vulputate.</p>
                        </div>
                        <div class="col-lg-6 sub-choose">
                            <div class="choose-icon">
                                <img src="images/bag.svg" alt="choose icon" class="img-fluid">
                            </div>
                            <h3 class="choose-icon-content">Easy to Shop</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                                velit. Aliquam vulputate.</p>
                        </div>
                        <div class="col-lg-6 sub-choose">
                            <div class="choose-icon">
                                <img src="images/support.svg" alt="choose icon" class="img-fluid">
                            </div>
                            <h3 class="choose-icon-content">24/7 Support</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                                velit. Aliquam vulputate.</p>
                        </div>
                        <div class="col-lg-6 sub-choose">
                            <div class="choose-icon">
                                <img src="images/return.svg" alt="choose icon" class="img-fluid">
                            </div>
                            <h3 class="choose-icon-content">Hassle Free Returns</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                                velit. Aliquam vulputate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 choose-image">
                    <img src="images/why-choose-us-img.jpg" alt="choose Image" class="img-fluid">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- choose section end -->
    <!-- Interior section start -->
    <section class="interior">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 interior-image">
                    <img src="images/img-grid-1.jpg" alt="Interior Image" class="img-fluid">
                    <div class="img-grid2">
                        <img src="images/img-grid-2.jpg" alt="Interior Image" class="img-fluid">
                    </div>
                    <div class="img-grid3">
                        <img src="images/img-grid-3.jpg" alt="Interior Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 interior-content">
                    <h3 class="interior-heading">We Help Make Mordern Interior Design</h3>
                    <p class="interior-des">
                        Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique.
                        Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique.
                        Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique.
                    </p>
                    <ul class="interior-list">
                        <li>Donec vitea odio quis nisl dapibus malesuada</li>
                        <li>Donec vitea odio quis nisl dapibus malesuada</li>
                        <li>Donec vitea odio quis nisl dapibus malesuada</li>
                        <li>Donec vitea odio quis nisl dapibus malesuada</li>
                    </ul>
                    <button class="btn btn-dark rounded-pill px-4 py-2">Explore</button>
                </div>
            </div>
        </div>
    </section>
    <section class="interior-sub">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 interior-sub">
                    <div class="interior-sub-image">
                        <img src="images/product-1.png" alt="Interior sub image" class="img-fluid">
                    </div>
                    <div class="interior-sub-content">
                        <h3>Nordic Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                        <a href="">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 interior-sub">
                    <div class="interior-sub-image">
                        <img src="images/product-2.png" alt="Interior sub image" class="img-fluid">
                    </div>
                    <div class="interior-sub-content">
                        <h3>Kruzo Aero Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                        <a href="">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 interior-sub">
                    <div class="interior-sub-image">
                        <img src="images/product-3.png" alt="Interior sub image" class="img-fluid">
                    </div>
                    <div class="interior-sub-content">
                        <h3>Ergonomic Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                        <a href="">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Interior section end -->
    <!-- Testimonials section start -->
    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Testimonial</h2>
                <div class="owl-carousel owl-theme testimonial  ">
                    <div class="item">
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis
                             nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate 
                             velit imperdiet dolor tempor tristique. Pellentesque habitant morbi 
                             tristique senectus et netus et malesuada fames ac turpis egestas. 
                             Integer convallis volutpat dui quis scelerisque.”
                        </p>
                        <div class="test-image">
                            <img src="images/person_1.jpg" alt="testimonial">
                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, C-Founder, XYZ Inc.</span>
                    </div>
                    <div class="item">
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis
                             nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate 
                             velit imperdiet dolor tempor tristique. Pellentesque habitant morbi 
                             tristique senectus et netus et malesuada fames ac turpis egestas. 
                             Integer convallis volutpat dui quis scelerisque.”
                        </p>
                        <div class="test-image">
                            <img src="images/person_2.jpg" alt="tesimonial">
                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, C-Founder, XYZ Inc.</span>
                    </div>
                    <div class="item">
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis
                             nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate 
                             velit imperdiet dolor tempor tristique. Pellentesque habitant morbi 
                             tristique senectus et netus et malesuada fames ac turpis egestas. 
                             Integer convallis volutpat dui quis scelerisque.”
                        </p>
                        <div class="test-image">
                            <img src="images/person_3.jpg" alt="testimonial">
                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, C-Founder, XYZ Inc.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section end -->
    <!-- Blog section start -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="blog-heading">
                    <h2>Recent Blog</h2>
                    <a href="#">View All Post</a>
                </div>
                <div class="col-lg-4 post-image">
                    <img src="images/post-1.jpg" alt="post-image" class="img-fluid">
                    <h3>First Time Home Owner Ideas</h3>
                    <p>by <a href="#">Kristin Watson</a> on <a href="#">Dec 19, 2021</a></p>
                </div>
                <div class="col-lg-4 post-image">
                    <img src="images/post-2.jpg" alt="post-image" class="img-fluid">
                    <h3>How To Keep Your Furniture Clean</h3>
                    <p>by <a href="#"> Robert Fox</a> on <a href="#">Dec 15, 2021</a></p>
                </div>
                <div class="col-lg-4 post-image">
                    <img src="images/post-3.jpg" alt="post-image" class="img-fluid">
                    <h3>Small Space Furniture Apartment Ideas</h3>
                    <p>by <a href="#">Kristin Watson</a> on <a href="#">Dec 12, 2021</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->
 <?php include "layout/footer.php"; ?>