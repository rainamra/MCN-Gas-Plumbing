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
                <a href="./gasServices.php">Gas Services</a>
                <a href="./naturalGas.php">Natural Gas Plumbing</a>
                <a href="./gasLeak.php">Gas Leak Detection</a>
                <a href="./gasInstallation.php">New Gas Installation</a>
                <a href="./gasBayonets.php">Gas Bayonets</a>
                <a href="./bbqInstallation.php">Outdoor BBQ Installation</a>
                <a href="./hotWater.php">Gas Hot Water Systems</a>
                <a href="./gasInstallation.php">Gas Heater Installation</a>
                <a href="./gasFitting.php">Gas Fitting</a>
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
              <a href="./gasServices.php">Gas Services</a>
                <a href="./naturalGas.php">Natural Gas Plumbing</a>
                <a href="./gasLeak.php">Gas Leak Detection</a>
                <a href="./gasInstallation.php">New Gas Installation</a>
                <a href="./gasBayonets.php">Gas Bayonets</a>
                <a href="./bbqInstallation.php">Outdoor BBQ Installation</a>
                <a href="./hotWater.php">Gas Hot Water Systems</a>
                <a href="./gasInstallation.php">Gas Heater Installation</a>
                <a href="./gasFitting.php">Gas Fitting</a>
              </div>
          </div>
          <li><a href="./about.php">ABOUT US</a></li>
          <li><a href="./contact.php">CONTACT US</a></li>
          <li><a href="./areas.php">AREAS WE SERVICE</a></li>
        </ul>
      </div>
    </header>

    <div class="area-banner"></div>

    <div class="column find-us">
      <h3>FIND THE CLOSEST GAS PLUMBING PROFESSIONAL<br /><span class="color-blue">TO YOUR DOORSTEP</span></h3>
      <form action="" class="form column">
        <ul class="row form-fields">
          <li>
            <input type="text" name="postal" id="postal" placeholder="Postal Code" style="width: 100%" />
          </li>
          <li>
            <input type="text" name="suburb" id="suburb" placeholder="Suburb" style="width: 100%" />
          </li>
        </ul>
        <ul class="row btn-wrapper">
          <li class="submit-btn"><input type="submit" value="SUBMIT" /></li>
        </ul>
      </form>
      <div class="map-wrapper">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d50548.915828456884!2d144.9582050352106!3d-37.641980259077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x6ad64f5baf96a30b%3A0xffbb98e14a497b3d!2smcn%20gas%20plumbing!3m2!1d-37.6420534!2d144.9932245!5e0!3m2!1sen!2sid!4v1658935868751!5m2!1sen!2sid"
          width="100%"
          height="100%"
          frameborder=""
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </div>

    <div class="row local-area">
      <div class="left-side">
        <h1>Your Local Plumbers Serving<br /><span class="color-blue">Boronia</span> And The Wider<br />Melbourne Area</h1>
        <p>
          MCN Plumbing has developed a wide range of specialist services over the last 30 years. Whether you need assistance with blocked drains or gas fitting, hot water systems or leaking pipes, we can help you. Toilet repairs, tap
          repairs, plumbing installations, and scheduled maintenance are also part of the service we provide.<br /><br />You can get our services at any time of the day or night thanks to MCN Plumbing’s 24/7 emergency response. If you have
          an urgent plumbing problem, we can be there 24 hours a day 7 days a week.<br /><br />Call the plumber in <span class="font-bold">Boronia</span> that your home and business can rely on. Contact MCN Plumbing and get a quote today.
        </p>
        <ul class="row btn-wrapper">
          <li class="book-now"><a href="">BOOK NOW</a></li>
          <li class="our-services"><a href="">OUR SERVICES</a></li>
        </ul>
      </div>
      <div class="row right-side">
        <div class="img-wrapper"><img src="./assets/overlay-why-mcn.png" alt="" /></div>
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

    <div class="column review">
      <div class="row">
        <div class="column left-side">
          <div class="blue-bg"></div>
          <div class="crew"><img src="./assets/review-banner.png" alt="" /></div>
          <div class="google-rating"><img src="./assets/google-rating.png" alt="" /></div>
        </div>
        <div class="right-side">
          <h2><span class="color-blue">OUR HAPPY CUSTOMER’S</span><br /><span class="font-size-xl">HONEST REVIEW</span></h2>
          <ul class="box-wrapper">
            <li>
              <h4 class="review-name">Joanne Schembri</h4>
              <h4>Joe provided prompt service knowledgeable he was polite and professional would recommend to anyone. The only plumber you'll ever need.</h4>
            </li>
            <li>
              <h4 class="review-name">Joanne Schembri</h4>
              <h4>Joe provided prompt service knowledgeable he was polite and professional would recommend to anyone. The only plumber you'll ever need.</h4>
            </li>
            <li>
              <h4 class="review-name">Joanne Schembri</h4>
              <h4>Joe provided prompt service knowledgeable he was polite and professional would recommend to anyone. The only plumber you'll ever need.</h4>
            </li>
          </ul>
          <ul class="row btn-wrapper">
            <li class="book-now"><a href="">BOOK NOW</a></li>
            <li class="view-review"><a href="">VIEW MORE REVIEWS</a></li>
          </ul>
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
