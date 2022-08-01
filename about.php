<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MCN Gas Plumbing</title>

    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  </head>
  <body>
  <header class="navbar">
      <div class="navbar-top">
        <ul class="row navbar-top-left">
          <li>MCN GAS PLUMBING PROFESSIONAL <span class="color-blue">JUST ONE CALL AWAY!</span></li>
        </ul>
        <ul class="row navbar-top-right">
          <li><a href="" class="book-now">BOOK NOW</a></li>
          <li><a href="" class="call-now">CALL NOW</a></li>
        </ul>
      </div>
      <div class="navbar-bottom">
        <ul class="row navbar-bottom-left">
          <li><img src="./assets/logo.png" alt="" /></li>
        </ul>
        <ul class="row navbar-bottom-right">
          <li><a href="./index.php">HOME</a></li>
          <li class="dropdown">
            <div class="row services-nav">
              <a class="" href="./services.php">SERVICES</a>
              <a href="javascript:void(0);" class="drop-button" onClick="openDropdown()">
                <i class="fa fa-caret-down" style="font-size: 28px; line-height: 36px;"></i>
              </a>
            </div>
            <div class="dropdown-content" id="dropdown-content" >
                <a href="">Gas Services</a>
                <a href="">Natural Gas Plumbing</a>
                <a href="./gasLeak.php">Gas Leak Detection</a>
                <a href="">New Gas Installation</a>
                <a href="">Gas Bayonets</a>
                <a href="">Outdoor BBQ Installation</a>
                <a href="">Gas Hot Water Systems</a>
                <a href="">Gas Heater Installation</a>
                <a href="">Gas Fitting</a>
            </div>
          </li>
          <li><a href="./about.php">ABOUT US</a></li>
          <li><a href="./contact.php">CONTACT US</a></li>
          <li><a href="./areas.php">AREAS WE SERVICE</a></li>
        </ul>
        <a href="javascript:void(0);" class="icon-menu" onclick="myFunction()">
          <i class="fa fa-bars" style="font-size: 34px; line-height: 40px;"></i>
        </a>
        <ul id="menu-links">
          <li><a href="./index.php">HOME</a></li>
          <li class="dropdown">
              <a class="" href="./services.php">SERVICES</a>
              <a href="javascript:void(0);" class="drop-button" onClick="myMenuMobile()">
                <i class="fa fa-caret-down" style="font-size: 18px; line-height: 21px;"></i>
              </a>
          </li>
          <div id="dropdown-mobile">
              <div class="dropdown-content" >
                <a href="">Gas Services</a>
                <a href="">Natural Gas Plumbing</a>
                <a href="./gasLeak.php">Gas Leak Detection</a>
                <a href="">New Gas Installation</a>
                <a href="">Gas Bayonets</a>
                <a href="">Outdoor BBQ Installation</a>
                <a href="">Gas Hot Water Systems</a>
                <a href="">Gas Heater Installation</a>
                <a href="">Gas Fitting</a>
              </div>
          </div>
          <li><a href="./about.php">ABOUT US</a></li>
          <li><a href="./contact.php">CONTACT US</a></li>
          <li><a href="./areas.php">AREAS WE SERVICE</a></li>
        </ul>
      </div>
    </header>

    <div class="about-banner">
      <div class="banner-title">
        <h1>ABOUT US</h1>
      </div>
      <div class="row content">
        <div class="left-side">
          <h3>Welcome to MCN Plumbing</h3>
          <h2 class="color-blue">Plumber Melbourne</h2>
          <p>
            If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocked drains, hot water
            repairs, and gas fitting. Based in Melbourne and backed by more than 30 years of experience, we use the best equipment and techniques to provide the right solutions for you.
            <br />
            <br />
            To keep your drains clean and free from blockages, MCN Plumbing also offers a blocked drains service. Stop drain blockages from developing into more serious issues with professional drain cleaning from our team.
          </p>
          <div class="btn-wrapper">
            <a href="">CONTACT US NOW</a>
          </div>
        </div>
        <div class="right-side" style="background-image: url('./assets/about-banner-bg.png')"></div>
      </div>
    </div>

    <div class="row what-is-mcn">
      <div class="column left-side">
        <h2><span class="color-blue">WHAT IS MCN</span><br />GAS PLUMBING</h2>
        <p>
          MCN Plumbing specialises in a full range of residential and commercial plumbing services. When you choose our team, you get guaranteed results, transparent pricing, and fast, same-day services whenever possible. MCN Plumbing even
          offers 24/7 emergency plumbing services, so give us a call now to take care of your urgent plumbing needs.<br /><br />Whether you’re in Ashwood or Ringwood, Campbellfield or Doncaster, Epping or Templestowe, MCN Plumbing can come
          to you. As your dedicated plumber in Melbourne, our team serves more than 30 different suburbs and we have been in the game for over 30 years. Fully equipped with all the parts, tools, equipment, and expertise for every job, we
          are here to make light work of your plumbing problems. You can rest assured that we work with every plumbing brand and accept all major payment methods for your convenience.
        </p>
        <div class="btn-wrapper">
          <a href="">CONTACT US NOW</a>
        </div>
      </div>
      <div class="right-side">
        <ul class="column">
          <li><img src="./assets/about-img-1.png" alt="" /></li>
          <li><img src="./assets/about-img-2.png" alt="" /></li>
        </ul>
      </div>
    </div>

    <div class="row services">
      <div class="left-side">
        <ul class="cards row">
          <li style="background-image: url(./assets/gas-instalation-bg.png)">
            <div class="img-wrapper"><img src="./assets/gas-instalation.png" alt="" /></div>
            <h5>NEW GAS<br />INSTALATION</h5>
          </li>
          <li style="background-image: url(./assets/hot-water-bg.png)">
            <div class="img-wrapper"><img src="./assets/hot-water.png" alt="" /></div>
            <h5>HOT WATER<br />SYSTEMS</h5>
          </li>
          <li style="background-image: url(./assets/leaking-bg.png)">
            <div class="img-wrapper"><img src="./assets/leaking.png" alt="" /></div>
            <h5>LEAKING GAS<br />REPAIRS</h5>
          </li>
          <li style="background-image: url(./assets/fixtures-bg.png)">
            <div class="img-wrapper"><img src="./assets/fixtures.png" alt="" /></div>
            <h5>GAS FIXTURES<br />INSTALATION</h5>
          </li>
          <li style="background-image: url(./assets/leaking-pipes-bg.png)">
            <div class="img-wrapper"><img src="./assets/leaking-pipes.png" alt="" /></div>
            <h5>LEAKING<br />PIPES</h5>
          </li>
          <li style="background-image: url(./assets/gas-fitting-bg.png)">
            <div class="img-wrapper"><img src="./assets/gas-fitting.png" alt="" /></div>
            <h5>GAS<br />FITTING</h5>
          </li>
        </ul>
      </div>
      <div class="column right-side">
        <h2><span class="color-blue">MCN's</span><br />GAS PLUMBING<br />SERVICES</h2>
        <p>
          If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocked drains, hot water
          repairs, and gas fitting. Based in Melbourne and backed by more than 30 years of experience, we use the best equipment and techniques to provide the right solutions for you
        </p>
        <div class="plumbing-btn">
          <a href="">LET'S GET PLUMBING</a>
        </div>
      </div>
    </div>

    <footer>
      <div class="column urgent">
        <h2>URGENTLY NEED <span class="color-blue">GAS PLUMBING PROFESSIONALS?</span></h2>
        <h3>WE ARE READY 24/7 FOR YOUR EMERGENCIES</h3>
        <form action="" class="form column">
          <ul class="row form-fields">
            <li>
              <input type="text" name="name" id="name" placeholder="Name" style="width: 100%" />
            </li>
            <li>
              <input type="text" name="need" id="need" placeholder="What You Need" style="width: 100%" />
            </li>
          </ul>
          <ul class="row btn-wrapper">
            <li class="free-quote"><input type="submit" value="GET A FREE QUOTE" /></li>
            <li class="pro-now"><input type="submit" value="GET A PRO NOW" /></li>
          </ul>
        </form>
      </div>
      <div class="row description">
        <div class="left-side">
          <ul class="column">
            <li class="logo">
              <img src="./assets/logo.png" alt="" />
            </li>
            <li class="services">
              <h3>Our Services</h3>
              <div class="service-wrapper">
                <h4>Blocked Drains</h4>
                <h4>Plumbing Services</h4>
                <h4>Hot Water Systems</h4>
                <h4>Gas Fitting</h4>
              </div>
            </li>
            <li class="blog">
              <h3>Blog</h3>
            </li>
            <li class="about">
              <h3>About Us</h3>
            </li>
            <li class="cards">
              <h4>MAJOR CARDS ACCEPTED</h4>
              <div class="img-wrapper">
                <img src="./assets/visa-card.png" alt="" />
              </div>
            </li>
          </ul>
        </div>
        <div class="right-side">
          <div class="info-card">
            <ul class="column btn-wrapper">
              <li class="book-now"><a href="">BOOK NOW</a></li>
              <li class="view-review"><a href="">CALL NOW</a></li>
            </ul>
            <ul class="column icons">
              <li>
                <div class="icon-wrapper">
                  <img src="./assets/location-icon.png" alt="" />
                </div>
                <h4>6/43 Scanlon Drive, Epping Victoria 3076, Australia.</h4>
              </li>
              <li>
                <div class="icon-wrapper">
                  <img src="./assets/mail-icon.png" alt="" />
                </div>
                <h4>info@mcnplumbing.com.au</h4>
              </li>
              <li>
                <div class="icon-wrapper">
                  <img src="./assets/facebook-icon.png" alt="" />
                </div>
                <h4>MCN Plumbing</h4>
              </li>
            </ul>
          </div>
          <div class="img-wrapper">
            <img src="./assets/mcn-car.png" alt="" />
          </div>
        </div>
      </div>
      <div class="row copyright">
        <h5>Copyright©2022 MCN Plumbing Australia.All rights reserved. Website Designed by Ostenpowers</h5>
      </div>
    </footer>
    <script>
      function myFunction() {
        var x = document.getElementById("menu-links");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
      function openDropdown() {
        var x = document.getElementById("dropdown-content");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
      function myMenuMobile() {
        var y = document.getElementById("dropdown-mobile");
        if (y.style.display === "block") {
          y.style.display = "none";
        } else {
          y.style.display = "block";
        }
      }
    </script>
  </body>
</html>
