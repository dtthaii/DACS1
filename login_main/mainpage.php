<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
} else {
  header("Location: signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="mainpage.css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BlockVerse</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
</head>

<body>

  <!-- Mobile Menu -->
  <div class="menu-btn">
    <span class="menu-btn-icon">&nbsp;</span>
  </div>
  <!-- End Mobile Menu -->

  <!-- Navbar -->
  <div class="navbar flex flex-sb">
    <div class="brand">BlockVerse</div>
    <div class="nav-links flex flex-sb">
      <a href="#home" class="nav-link active">Home</a>
      <a href="#features" class="nav-link">Features</a>
      <a href="#offers" class="nav-link">Offers</a>
      <a href="#account" class="nav-link">Earn</a>
    </div>

    <!-- <a href="logout.php"><input class="block-button" type="button" value="Log Out" id="connectWallet"></a> -->
    <ul>
      <li>
        <img src="/CRYPTO FINANCE/image/nfts21-img.png" class="profile">
        <ul>
          <li class="sub-item">
            <a href="/CRYPTO FINANCE/cart/cart.html"><span class="material-icons-outlined">shopping_cart</span></a>
            <p>Shopping Cart</p>
          </li>
          <li class="sub-item">
            <a href="/CRYPTO FINANCE/account details/index.html"><span class="material-icons-outlined"> manage_accounts </span></a>
            <p>Update Profile</p>
          </li>
          <li class="sub-item">
            <a href="/CRYPTO FINANCE/login_main/logout.php"><span class="material-icons-outlined"> logout </span></a>
            <p>Logout</p>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- End Navbar -->

  <!-- Hero Section -->
  <div class="section hero" id="home">
    <div class="hero-overlay">
      <img src="/CRYPTO FINANCE/image/crypto-1.png" alt="Crypto" />
      <img src="/CRYPTO FINANCE/image/crypto-2.png" alt="Crypto" />
      <img src="/CRYPTO FINANCE/image/crypto-3.png" alt="Crypto" />
      <img src="/CRYPTO FINANCE/image/crypto-4.png" alt="Crypto" />
      <img src="/CRYPTO FINANCE/image/crypto-5.png" alt="Crypto" />
      <img src="/CRYPTO FINANCE/image/crypto-6.png" alt="Crypto" />
      <img src="/CRYPTO FINANCE/image/crypto-7.png" alt="Crypto" />
      <img src="/CRYPTO FINANCE/image/crypto-8.png" alt="Crypto" />
    </div>
    <div class="hero-content">
      <h1 class="hero-heading">
        World Class <br />
        <span>Crypto Trading</span> Platform
      </h1>
      <p>
        Say Goodbye To Traditional Finance And Embrace The Future Of Money
        With Our Innovative Cryptocurrency Platform. Be The Hero Of Your
        Financial Journey Today!
      </p>
      <a href="#account" class="block-button">Start Trading</a>
      <a href="#features" class="scroll-btn">
        <img src="/CRYPTO FINANCE/image/arrow.png" alt="scroll" />
      </a>
    </div>
  </div>
  <!-- End Hero Section -->

  <!-- Features Section -->
  <div class="section features" id="features">
    <h2 class="section-heading">What Makes Us Different?</h2>
    <div class="features-container w-100 flex flex-sb">
      <!-- link overview -->
      <div class="feature">
        <a href="/CRYPTO FINANCE/overview/index.html">
          <div class="feature-image"></div>
          <h4>Market</h4>
          <p>
            In a world driven by technology and innovation, a new frontier has emerged
            Welcome to BlockVerse, where the future is built on the blockchain!
          </p>
        </a>
      </div>

      <!-- link NFTs -->
      <div class="feature">
        <a href="/CRYPTO FINANCE/nfts page/index.html">
          <div class="feature-image"></div>
          <h4>NFTs</h4>
          <p>
            In a world where art meets technology, a new digital revolution has taken center stage
            – the rise of Non-Fungible Tokens (NFTs).
          </p>
        </a>
      </div>

      <!-- link Wallet -->
      <div class="feature">
        <a href="/CRYPTO FINANCE/wallet2.0/index.html">
          <div class="feature-image"></div>
          <h4>Wallet</h4>
          <p>
            Our blockchain wallet is the ultimate companion for anyone
            navigating the exciting world of cryptocurrencies.
          </p>
        </a>
      </div>
    </div>
  </div>
  <!-- End Features Section -->
  <!-- Offers Section  -->
  <div class="section offers" id="offers">
    <h2 class="section-heading">We Offer</h2>

    <div class="offers-container flex flex-sb">
      <div class="offers-image"></div>
      <div class="offers-content flex-c flex-sb">
        <div class="offer">
          <h4>Stokes</h4>
          <p class="section-text">
            Invest in thousands of companies and fractional shares with as
            little as $5 using our trading tools and analytics to create your
            own financial portfolio.
          </p>
        </div>

        <div class="offer">
          <h4>Options</h4>
          <p class="section-text">
            Options provide a strategic alternative to just investing in
            equity.
          </p>
        </div>

        <div class="offer">
          <h4>OTC</h4>
          <p class="section-text">
            Get a better understanding of what OTCs are and how you can invest
            in OTCs with Webull.
          </p>
        </div>

        <div class="offer">
          <h4>ADRs</h4>
          <p class="section-text">
            Invest in foreign companies to diversify your portfolio or take
            advantage of global opportunities.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Offers Section  -->
  <!-- Partners Section -->
  <div class="section partners" id="partners">
    <h2 class="section-heading">Investors & Partners</h2>

    <div class="investors-container">
      <div class="investor">
        <img src="/CRYPTO FINANCE/image/investor-1.png" alt="Investor">
      </div>

      <div class="investor">
        <img src="/CRYPTO FINANCE/image/investor-2.png" alt="Investor">
      </div>

      <div class="investor">
        <img src="/CRYPTO FINANCE/image/investor-3.png" alt="Investor">
      </div>

      <div class="investor">
        <img src="/CRYPTO FINANCE/image/investor-4.png" alt="Investor">
      </div>
    </div>
  </div>

  <!-- End Partners Section  -->
  <!-- Account Section -->
  <div class="section account" id="account">
    <h2 class="section-heading">Create Account</h2>

    <div class="account-container flex flex-sb">
      <div class="account-content">
        <p class="section-text">
          Welcome to our platform for creating a crypto account!
          Sign up now to start buying, selling, and trading
          cryptocurrencies. It's easy to get started - simply fill
          out the registration form with your personal details, verify
          your email address, and fund your account with supported
          payment methods. Our platform supports a variety of popular
          cryptocurrencies, so you can explore and trade with ease.
          Join our platform today and start your journey into the
          world of cryptocurrencies!
        </p>
        <a href="/CRYPTO FINANCE/login_main/signup.php">
          <div class="block-button">Sign up</div>
        </a>
      </div>

      <div class="account-image"></div>
    </div>
  </div>
  <!-- End Account Section -->
  <!-- Subscribe Section -->
  <div class="section subscribe" id="subscribe">
    <h2 class="section-heading">Subscribe News</h2>

    <div class="subscribe-container">
      <img src="/CRYPTO FINANCE/image/subscribe.png" alt="Subscribe">

      <p class="section-text">
        We are going to launch our website very soon. <br />
        Stay with us.
      </p>

      <div class="get-notified">
        <input type="text" placeholder="Enter email address">
        <a href="/CRYPTO FINANCE/contact page/index.html" class="block-button">Notify Me</a>
      </div>
    </div>
  </div>
  <!-- End Subscribe Section -->

  <!-- Footer -->
  <div class="footer flex flex-sb">
    <div class="brand">BlockVerse</div>
    <div class="footer-menu flex flex-sb">
      <a href="#" class="social">
        <img src="/CRYPTO FINANCE/image/footer-1.png" alt="Social">
      </a>

      <a href="#" class="social">
        <img src="/CRYPTO FINANCE/image/footer-2.png" alt="Social">
      </a>

      <a href="#" class="social">
        <img src="/CRYPTO FINANCE/image/footer-3.png" alt="Social">
      </a>

      <a href="#" class="social">
        <img src="/CRYPTO FINANCE/image/footer-4.png" alt="Social">
      </a>
    </div>
  </div>
  <!-- End Footer -->

  <script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>

  <script src="mainpage.js"></script>
</body>

</html>