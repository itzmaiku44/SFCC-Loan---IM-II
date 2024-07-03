<?php
session_start();


/* if (!isset($_SESSION['email'])) {
    header('location: home.php');
    exit();
}

// Display user information or dashboard content here
$email = $_SESSION['email']; */


/* USE THIS ON LOGGED IN PAGE \/ \/ */
/* <?php
        if (isset($_SESSION['username'])) {
          echo '<a class="loanoffer" href="logout.php">Logout</a>';
        } else {
          echo '<a class="loanoffer" href="login.php">LOGIN</a>';
        }
      ?> */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Loan Application Website</title>
  <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">


</head>

<body>
  <header>
    <h2 class="headTitle"><img src="img/SFCC.png" alt="" style="">SFCC LOANS <span class="subTitle" style="">Your trusted partner</span></h2>
    <nav>
      <a class="home" href="#home"><i class="lni lni-home"></i> Home</a>
      <a class="about" href="#about"><i class="lni lni-magnifier"></i> About Us</a>
      <a class="loanoffer" href="#loanOffer"><i class="lni lni-handshake"></i> Loan Offer</a>
      <a class="contact" href="#footerContact"><i class="lni lni-phone"></i> Contact Us</a>
      <button class="loginuser"><a class="lgn" href="login.php">LOGIN</a></button>
      
    </nav>
  </header>


  <div id="home" class="homeAnchor"></div>

  <!-- line bar -->
  <div class="line-bar">
    <div class="broadcast-text">
      <marquee direction="left" behavior="scroll" scrollamount="3">We are thrilled that you are considering our services for your financial needs. Our loan application process is designed to be straightforward, transparent, and quick, ensuring that you receive the support you need with minimal hassle. Whether you are looking to fund a major purchase, consolidate debt, or cover unexpected expenses, we are here to help.</marquee>
    </div>
  </div>

  <!-- Slider -->
  <div class="sliderTransi">
    <div class="slider">
      <div class="loanslider">
        <div class="item active" style="background-image: url('img/loanman1.jpg');">
          <div class="content">
           <p>SFCC LOANS</p>
            <h2><b>How To Apply </b></h2>
            <p style="font-weight: 400;">Simple and Secure Loan Application Process</p>
            <a href="login.php"><button class="order">Apply Now</button></a>
          </div>
        </div>
        <div class="item" style="background-image: url('img/loanpic3.webp');">
          <div class="content">
            <p>SFCC LOANS</p>
            <h2><b>LOAN APPLICATION</b></h2>
            <p style="font-weight: 400;">Simple and Secure Loan Application Process</p>
            <a href="login.php"><button class="order">Apply Now</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="slider.js"></script>


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

   <!--  C A S H  N O W   T A B -->
  <section id="about" class="cashnow">
    <div class="cashnow-apply">
      <p><b>Welcome to SFCC LOANS</b>, your trusted partner in financial solutions. At SFCC LOANS, we understand that each financial journey is unique, which is why we are committed to providing personalized lending options tailored to meet your specific needs. Whether you're looking to finance a new home, consolidate debt, or fund a personal project, our dedicated team of professionals is here to guide you every step of the way. With a focus on transparency, integrity, and customer satisfaction, we strive to make your borrowing experience straightforward and rewarding. Discover how SFCC LOANS can help you achieve your financial goals today.

<br><br>Feel free to customize the business name and details according to your specific Loan business!</p>
      <img src="img/banking.jpg" style="height: 500px;width: 1000px;"/>
    </div>
  </section>
  <div id="loanOffer" class="loanoffer-anchor"></div>
         <!--  LOAN OFFER TAB  -->
  <section>
    <?php
      include("loan_offer.php");
    ?>
  </section>  <!-- END OF LOAN OFFER SECTION -->


       <!--  REGISTRATION INFO TAB -->
  <section id="loan" class="registration-section">
        <div class="icon-container">
            <img src="img/regicon.png" alt="Icon 4">
            <p>Register an account through our website</p>
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
   

  <footer id="footerContact"class="footer-section">
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