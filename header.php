<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Cart</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="carousel.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

    <style media="screen">
    .dropbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>

</head>
<body>

<!-- start #header -->
<header id="header">


  <header>

    <!-- Primary Navigation -->
    <nav class="navb">
    <div class="content">
      <a href="#" class="items" id="ima"></a>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li class="items"><a href="index.php">Home</a></li>
        <li class="items"><a href="products.php">Products</a></li>
      </ul>

      <?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];


    session_write_close();

    echo '
    <div class="dropdown">
      <button class="dropbtn">Hi, '.$username.'</button>
      <div class="dropdown-content">
        <a href="#">My Profile</a>
        <a href="logout.php">Log out</a>
      </div>
    </div> ';

} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index

    session_unset();
    session_write_close();

    echo '
    <div class="dropdown">
      <button class="dropbtn">Hello</button>
      <div class="dropdown-content">
          <a href="login.php">Login</a>
          <a href="user-registration.php">Register</a>
      </div>
    </div> ';

}

?>

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

  <div class="banners"></div>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->
<body>
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


</body>
<!-- start #main-site -->
<main id="main-site">
