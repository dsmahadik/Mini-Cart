
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="carousel.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header">


    <!-- Primary Navigation -->
    <nav class="navb">
    <div class="content">
      <a href="#" class="items" id="ima"></a>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li class="items"><a href="index.php" class="active">Home</a></li>
        <li class="items"><a href="horeca.html">Category</a></li>
        <li class="items"><a href="aboutus.html">Products</a></li>
      </ul>
      <form action="#" class="navf font-size-14 font-rale">
          <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
              <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
              <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
          </a>
      </form>

      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>

    </div>

  </nav>

    <!-- !Primary Navigation -->

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background: url(./assets/iPhone-12_Web-Banner_qAvailable-Now_1.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1.2s"><span>Vridhi Enterprises</span></h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 1.8s">One Stop Solution For All Your Food Needs</h3>
                        <p class="animated bounceInRight" style="animation-delay: 2.4s"><a href="horeca.html">Our Specialities</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(./assets/iPhone-12_Web-Banner_qAvailable-Now_1.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1.2s"><span>About Us</span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 1.8s">Learn More About Our Legacy In The Industry</h3>
                        <p class="animated zoomIn" style="animation-delay: 2.4s"><a href="aboutus.html">About Us</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(./assets/iPhone-12_Web-Banner_qAvailable-Now_1.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated zoomIn" style="animation-delay: 1.2s"><span>Contact Us</span></h2>
                        <h3 class="animated fadeInLeft" style="animation-delay: 1.8s">Give Us A Chance To Serve You Or Leave A Feedback</h3>
                        <p class="animated zoomIn" style="animation-delay: 2.4s"><a href="contactus.php">Contact Us</a></p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

</header>
<!-- !start #header -->

  <?php

      shuffle($product_shuffle);

      // request method post
      if($_SERVER['REQUEST_METHOD'] == "POST"){
          if (isset($_POST['top_sale_submit'])){
              // call method addToCart
              $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
          }
      }
  ?>


  <section id="top-sale">
      <div class="container py-5">
          <h4 class="font-rubik font-size-20">Top Sale</h4>
          <hr>
          <!-- owl carousel -->
          <div class="owl-carousel owl-theme">
              <?php foreach ($product_shuffle as $item) { ?>
              <div class="item py-2">
                  <div class="product font-rale">
                      <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                          <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>
                          <div class="rating text-warning font-size-12">
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                              <span>$<?php echo $item['item_price'] ?? '0' ; ?></span>
                          </div>
                          <form method="post">
                              <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                              <?php
                              if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                  echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                              }else{
                                  echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                              }
                              ?>

                          </form>
                      </div>
                  </div>
              </div>
              <?php } // closing foreach function ?>
          </div>
          <!-- !owl carousel -->
      </div>
  </section>

  <script>
    const body = document.querySelector("body");
    const navb = document.querySelector(".navb");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    const bar = document.querySelector(".bar-img");
    const drop = document.querySelector(".drop-img")

    window.onscroll = ()=>{
      this.scrollY > 20 ? navb.classList.add("sticky") : navb.classList.remove("sticky");
    }
  </script>

  <script language="JavaScript" type="text/javascript">
    $(document).ready(function(){
      $('.carousel').carousel({
        interval: 3000
      })
    });
  </script>

</body>
