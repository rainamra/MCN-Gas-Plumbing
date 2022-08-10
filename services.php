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

    <div class="services-banner">
      <div class="banner-title">
        <h1>OUR SERVICES</h1>
      </div>
      <div class="row content">
        <div class="left-side">
          <h2>GAS PLUMBING</h2>
          <ul class="services-wrapper">
            <li>
              <div class="img-wrapper">
                <img src="./assets/callouut-fee.png" alt="" />
              </div>
              <div class="text-wrapper">
                <h4 class="title">$0 Callout Fee - Fast Callouts with No Hidden Fees!</h4>
                <h4>Get plumbing services within 90 minutes with nothing extra to pay</h4>
              </div>
            </li>
            <li>
              <div class="img-wrapper">
                <img src="./assets/emergency.png" alt="" />
              </div>
              <div class="text-wrapper">
                <h4 class="title">24/7 Emergency Plumbing</h4>
                <h4>We respond to your plumbing emergencies 24-hours a day 7 days a week!</h4>
              </div>
            </li>
            <li>
              <div class="img-wrapper">
                <img src="./assets/same-day.png" alt="" />
              </div>
              <div class="text-wrapper">
                <h4 class="title">Same Day Services</h4>
                <h4>Call before 10:30am any day and we will GUARANTEE a same-day service</h4>
              </div>
            </li>
            <li>
              <div class="img-wrapper">
                <img src="./assets/guarantee.png" alt="" />
              </div>
              <div class="text-wrapper">
                <h4 class="title">All Work Guaranteed</h4>
                <h4>You get guaranteed results when you choose MCN Plumbing</h4>
              </div>
            </li>
          </ul>
        </div>
        <div class="right-side">
          <div class="btn-wrapper">
            <a href="">CONTACT US NOW</a>
          </div>
          <div class="img-wrapper">
            <img src="./assets/services-banner-overlay.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="service-list">
      <ul class="row service-cards">
        <li>
          <div class="card-wrapper">
            <div class="top" style="background-image: url(./assets/gas-services.png)"></div>
            <div class="bottom">
              <h3>GAS<br />SERVICES</h3>
              <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocke drains.</p>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="">LEARN MORE</a>
          </div>
        </li>
        <li>
          <div class="card-wrapper">
            <div class="top" style="background-image: url(./assets/natural-gaspng.png)"></div>
            <div class="bottom">
              <h3>NATURAL GAS<br />PLUMBING</h3>
              <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocke drains.</p>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="">LEARN MORE</a>
          </div>
        </li>
        <li>
          <div class="card-wrapper">
            <div class="top" style="background-image: url(./assets/gas-leak.png)"></div>
            <div class="bottom">
              <h3>GAS LEAK<br />DETECTION</h3>
              <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocke drains.</p>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="./gasLeak.php">LEARN MORE</a>
          </div>
        </li>
        <li>
          <div class="card-wrapper">
            <div class="top" style="background-image: url(/assets/new-gas.png)"></div>
            <div class="bottom">
              <h3>NEW GAS<br />INSTALATION</h3>
              <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocke drains.</p>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="">LEARN MORE</a>
          </div>
        </li>
        <li>
          <div class="card-wrapper">
            <div class="top" style="background-image: url(./assets/gas-bayonets.png)"></div>
            <div class="bottom">
              <h3>GAS<br />BAYONETS</h3>
              <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocke drains.</p>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="">LEARN MORE</a>
          </div>
        </li>
        <li>
          <div class="card-wrapper">
            <div class="top" style="background-image: url(./assets/outdoor-bbq.png)"></div>
            <div class="bottom">
              <h3>OUTDOOR BBQ<br />INSTALATION</h3>
              <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocke drains.</p>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="">LEARN MORE</a>
          </div>
        </li>
        <li>
          <div class="card-wrapper">
            <div class="top" style="background-image: url(./assets/water-system.png)"></div>
            <div class="bottom">
              <h3>GAS HOT <br />WATER SYSTEMS</h3>
              <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocke drains.</p>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="">LEARN MORE</a>
          </div>
        </li>
        <li>
          <div class="card-wrapper">
            <div class="top" style="background-image: url(./assets/gas-heater.png)"></div>
            <div class="bottom">
              <h3>GAS HEATER<br />INSTALATION</h3>
              <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocke drains.</p>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="">LEARN MORE</a>
          </div>
        </li>
        <li>
          <div class="card-wrapper">
            <div class="top" style="background-image: url(./assets/services-gas-fitting.png)"></div>
            <div class="bottom">
              <h3>GAS<br />FITTING</h3>
              <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. Specialising in a wide range of plumbing services, we can assist you with toilet repairs, tap repairs, leaking pipes, blocke drains.</p>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="">LEARN MORE</a>
          </div>
        </li>
      </ul>
    </div>

    <div class="services-brands column">
      <ul class="row brand-wrapper">
        <li><img src="./assets/aquaMax-logo.png" alt="" /></li>
        <li><img src="./assets/rinnai-logo.png" alt="" /></li>
        <li><img src="./assets/vulcan-logo.png" alt="" /></li>
        <li class="rheem-logo"><img src="./assets/rheem-logo.png" alt="" /></li>
        <li><img src="./assets/bosch-logo.png" alt="" /></li>
      </ul>
      <div class="title-wrapper">
        <h2>BRANDS WE USE</h2>
      </div>
    </div>
    <div class="row services-special">
      <div class="left-side">
        <ul class="row coupon-wrapper">
          <li>
            <img src="./assets/vertical-coupon.png" alt="" />
            <div class="column text-wrapper">
              <h3><span class="header-text">$50</span><br />Voucher</h3>
              <p>Mention this ad to get the $50 off*</p>
            </div>
            <div class="btn-wrapper">
              <a href="">BOOK NOW</a>
            </div>
          </li>
          <li>
            <img src="./assets/vertical-coupon.png" alt="" />
            <div class="column text-wrapper">
              <h3>UP TO<br /><span class="header-text">$79</span></h3>
              <h4>SENIOR DISCOUNT</h4>
            </div>
            <div class="btn-wrapper">
              <a href="">BOOK NOW</a>
            </div>
          </li>
        </ul>
        <div class="content">
          <h3>GET SPECIAL<br />OFFERS</h3>
          <div class="row btn-wrapper">
            <a href="">LET'S GET PLUMBING</a>
          </div>
        </div>
      </div>
      <div class="right-side">
        <div class="text-wrapper">
          <h3>ENQUIRE NOW</h3>
          <h4>Use the form below to drop us an email if you have any question or comments.</h4>
        </div>
        <form action="" class="form column">
          <ul class="form-fields">
            <li>
              <input type="text" name="name" id="name" placeholder="Name" style="width: 100%" />
            </li>
            <li>
              <input type="text" name="email" id="email" placeholder="Email" style="width: 100%" />
            </li>
            <li class="row" style="justify-content: space-between">
              <input type="text" name="phone" id="phone" placeholder="Phone" style="width: 48%" />
              <input type="text" name="suburb" id="suburb" placeholder="Suburb" style="width: 48%" />
            </li>
            <li>
              <textarea type="text" name="message" rows="5" cols="20" placeholder="Comment" style="width: 100%"></textarea>
            </li>
          </ul>
          <div class="row submit-btn">
            <input type="submit" value="CONTACT US NOW" />
          </div>
        </form>
      </div>
    </div>

    <footer>
      <div class="column urgent services-urgent">
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
