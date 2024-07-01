<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library Management System</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel = "icon" href = "image/logo.png" type = "image/png">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">
        <div class="logo1">
        <a href="#"><img src="image/logo.png">
        <h1>Senior High School Library</h1>
        <h4>NOVALICHES, QUEZON CITY PHILIPPINES</h4>
    </a>
        </div>
        
        <form action="" class="search-form">
        </form>
        <div class="icons" class="search-form">
            <a href="libsystem\index.php"><div id="login-btn" class="fas fa-user"> Login</div></a>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#featured">featured</a>
            <a href="#FAQ">FAQ's</a>
            <a href="#blogs">About Us</a>
            <a href="#footer">Contact Us</a>


        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-book"></a>
    <a href="#FAQ" class="fas fa-question"></a>
    <a href="#blogs" class="fas fa-info"></a>
    <a href="#footer" class="fas fa-phone"></a>

</nav>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Online Library</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias sit necessitatibus, aliquid ex minima at!</p>
            <a href="#featured" class="btn">Explore</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="libsystem/images/Book Photos/practical-research-1.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="libsystem/images/Book Photos/practical-research-2.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="libsystem/images/Book Photos/bread-and-pastry-production-.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="libsystem/images/Book Photos/business-ethics-and-social-responsibility (1).jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="libsystem/images/Book Photos/caregiving-volume-1.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="libsystem/images/Book Photos/disciplines-and-ideas-in-applied-social-sciences.jpg" alt=""></a>
            </div>  
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-handshake"></i>
        <div class="content">
            <h3>free Borrowing</h3>
            <p>Available books</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secured information</h3>
            <p>personal and virtual</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
            <p>10 days returns</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-book"></i> 
        <div class="content">
            <h3>Books</h3>
            <p>Available E-Books</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>Call and Message us anytime</p>
        </div>
    </div>

    

</section>

<!-- icons section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-at">Maria Angelica Rea</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/general-biology-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">General Biology 1</div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-at" >A.B. Ilano</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/principles-of-marketing.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">Principles of Marketing</div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-at" >Esther L. Barraceros</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/practical-research-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">Practical Research 2</span></div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-at" >Dr.Esther L. Baraceros</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/practical-research-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">Practical Research 1</span></div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-at" >Geoffrey A. Guevara</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/pambungad-sa-pilosopiya-ng-tao.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">Pambungad sa Pilosopiya</span></div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-at" >Eloisa Romero</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/local-guiding-services-.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">Local Guiding Services</span></div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-at" >Jayeel Serrano Cornelio</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/introduction-to-world-religions-and-belief-systems.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">Introductoin To World Religions</span></div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-at" > Laarni A. Urbiztondo</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/housekeeping-.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">Housekeeping</span></div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#"class="fas fa-at">Constantino Aurora Batnag</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/filipino-sa-piling-larangan-tech-voc.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">Filipino sa Piling Larangan</span></div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-at" >Christian George Francisco</a>
                </div>
                <div class="image">
                    <img src="libsystem/images/Book Photos/filipino-sa-piling-larangan-akademik-.jpg" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <div class="Book-name">TECH-VOC</span></div>
                    <a href="#" class="btn">Details</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter" id="newsletter">
    <form action="index.php" method="POST">
        <?php 
        $userEmail = ""; //first we leave email field blank
        if(isset($_POST['subscribe'])){ //if subscribe btn clicked
          $userEmail = $_POST['email']; //getting user entered email
          if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
            $subject = "Thanks for Subscribing us - Online Library Management";
            $message = "Thanks for subscribing to our website. You'll always receive updates from us. And we won't share and sell your information.";
            $sender = "From: angelopino044@gmail.com";
            //php function to send mail
            if(mail($userEmail, $subject, $message, $sender)){
              ?>
               <!-- show sucess message once email send successfully -->
              <div class="alert success-alert">
                <?php echo "Thanks for Subscribing us." ?>
              </div>
              <?php
              $userEmail = "";
            }else{
              ?>
              <!-- show error message if somehow mail can't be sent -->
              <div class="alert error-alert">
              <?php echo "Failed while sending your mail!" ?>
              </div>
              <?php
            }
          }else{
            ?>
            <!-- show error message if user entered email is not valid -->
            <div class="alert error-alert">
              <?php echo "$userEmail is not a valid email address!" ?>
            </div>
            <?php
          }
        }
        ?>
        <h3>subscribe for latest updates</h3>
        <input type="email" name="email" placeholder="enter your email" class="box" required value="<?php echo $userEmail ?>">
        <input type="submit" value="subscribe" name="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->


<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h3>Albert Einstein</h3>
        <h1>Everyone is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.</h1>
        
    </div>

    <div class="image">
        <img src="image/einstein-1.png" alt="">
    </div>

</section>

<!-- deal section ends -->

<!-- FAQ's Start here -->
<section class="FAQ" id="FAQ">

    <h1 class="heading"> <span>FAQ's</span> </h1>
       
    <div class="container">

      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Why is the moon sometimes out during the day?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false">
            <span class="accordion-title">Why is the sky blue?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">Will we ever discover aliens?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false">
            <span class="accordion-title">How much does the Earth weigh?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">How do airplanes stay up?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
      </div>
    </div>

</section>
<!-- FAQ's end here -->



<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>About Us</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our location</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Quirino Hwy, Novaliches, Quezon City, Metro Manila Philippines.</a>
            
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> FAQ's </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> About Us </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i>@gmail.com </a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.221922530886!2d121.0321199153525!3d14.700038378571893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b0d8bd4a263d%3A0xbed2aa633fbf6170!2sQuezon%20City%20University%20-%20San%20Bartolome!5e0!3m2!1sen!2sph!4v1645418976716!5m2!1sen!2sph" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit">  <span></span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>