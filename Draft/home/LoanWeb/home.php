<?php
session_start();


if (!isset($_SESSION['email'])) {
    header('location: userlogin.php');
    exit();
}

// Display user information or dashboard content here
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Loan Application Website</title>
  <link rel="stylesheet" href="css/home.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <h2 class="headTitle">{INSERT LOGO}</h2>
    <nav>
      <a class="home" href="home.html">Home</a>
      <a class="about" href="#">About Us</a>
      <a class="loanoffer" href="#">Loan Offer</a>
      <a class="loanoffer" href="#">Contact Us</a>
      <?php
        if (isset($_SESSION['username'])) {
          echo '<a class="loanoffer" href="logout.php">Logout</a>';
        } else {
          echo '<a class="loanoffer" href="login.php">LOGIN</a>';
        }
      ?>
    </nav>
  </header>

  <!-- line bar -->
  <div class="line-bar">
    <div class="broadcast-text">
      <marquee direction="left" behavior="scroll" scrollamount="3">LOAN APPLICATION !!! LOAN APPLICATION !!! LOAN APPLICATION !!! LOAN APPLICATION !!! LOAN APPLICATION !!! LOAN APPLICATION !!! LOAN APPLICATION !!! LOAN APPLICATION !!!</marquee>
    </div>
  </div>

  <!-- Slider -->
  <div class="sliderTransi">
    <div class="slider">
      <div class="loanslider">
        <div class="item active" style="background-image: url('img/loanman1.jpg');">
          <div class="content">
           <p>SFCC LOAN</p>
            <h2>How To Apply </h2>
            <p>Simple and Secure Loan Application Process</p>
            <a href="#"><button class="order">Apply Now</button></a>
          </div>
        </div>
        <div class="item" style="background-image: url('img/loanpic3.webp');">
          <div class="content">
            <p>Loaning App</p>
            <h2>LOAN APPLICATION</h2>
            <p>Simple and Secure Loan Application Process</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll(".slider .loanslider .item");
         let currentItem = 0;
         const intervalTime = 5000; // 5 seconds

    function showNextItem() {
         items[currentItem].classList.remove("active");
        currentItem = (currentItem + 1) % items.length;
        items[currentItem].classList.add("active");
    }

     items[currentItem].classList.add("active");
     setInterval(showNextItem, intervalTime);
    });
  </script>


<!-- New Section -->
<section class="features-section">
  <div class="container">
    <div class="feature">
      <img src="img/loanpic2.jpg" alt="Icon 1">
      <h3>Step 1</h3>
      <p>Register an account through our web application within minutes. Upload one (1) ID, take a selfie, and get an account instantly.</p>
    </div>
    <div class="feature">
      <img src="img/loanpic2.jpg" alt="Icon 2">
      <h3>Step 2</h3>
      <p>Choose from a variety of our products that suit your needs with ease.

      </p>
    </div>
    <div class="feature">
      <img src="img/loanpic2.jpg" alt="Icon 3">
      <h3>Step 3</h3>
      <p>Apply just by tapping when you have made your choice.
        
      </p>
    </div>
  </div>
</section>

    
<section class="cashnow">
    <div class="cashnow-apply">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      
    </div>
  </section>


  <section class="registration-section">
        <div class="icon-container">
            <img src="img/regicon.png" alt="Icon 4">
            <p>Register an account through our mobile app</p>
        </div>
        <div class="icon-container" >
            <img src="img/docicon.png" alt="Icon 5">
            <p>Choose from a variety of services/products</p>
        </div>
        <div class="icon-container">
            <img src="img/blueloan.png" alt="Icon 6">
            <p>Apply securely after making your choice</p>
        </div>
    </section>
   

    <footer class="footer-section">
  <div class="container">
    <div class="footer-column">
      <h3>Visit Us</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.1102177219373!2d121.02531561468069!3d14.556840489836912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c903e94e2b73%3A0x4cb74bcd95dbf59b!2sKeyland%20Arnaiz%20Building!5e0!3m2!1sen!2sph!4v1625678277378!5m2!1sen!2sph"
        width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="footer-column">
      <h3>Call Us</h3>
      <p>For inquiries and comments:<br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a>.
      </p>
      <p>For any collection inquiries:<br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a>.
      </p>
    </div>
    <div class="footer-column">
      <img src="logo.png" alt="Logo">
      <p>SFCC, Inc.<br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p></a>.
      </p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>Copyright © 2024 SFCC Finance. All rights reserved.</p>
  </div>
</footer>

</body>
</html>