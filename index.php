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

    <div class="column banner">
        <div class="container overlay row" style="background-image: url(./assets/banner-bg.png);">
            <div class="row left-side">
                <div class="column form-wrapper">
                  <div class="column text-wrapper">
                    <h4>BOOK NOW AND GET $50 OFF*</h4>
                    <h1>
                        <span class="color-blue">
                            <span class="font-size-l">YOUR LOCAL</span><br />
                            GAS PLUMBER IN MELBOURNE
                            </h1>
                        </span>
                    <h3>LET THE EXPERTS HANDLE IT</h3>
                  </div>
                  <form action="" class="form column">
                    <ul class="form-fields">
                      <li>
                        <input type="text" name="name" id="name" placeholder="Name" style="width:100%"/>
                      </li>
                      <li>
                        <input type="text" name="email" id="email" placeholder="Email" style="width:100%"/>
                      </li>
                      <li class="row" style="justify-content: space-between;">
                        <input type="text" name="phone" id="phone" placeholder="Phone" style="width:48%"/>
                        <input type="text" name="suburb" id="suburb" placeholder="Suburb" style="width:48%"/>
                      </li>
                      <li>
                        <textarea type="text" name="message" rows="6" cols="20" placeholder="Comment" style="width:100%"></textarea>
                      </li>
                    </ul>
                    <div class="row submit-btn">
                      <input type="submit" value="CONTACT US NOW" />
                    </div>
                  </form>
                </div>
              </div>
              <div class="column right-side">
                <ul class="row coupon-wrapper">
                    <li class="senior">
                      <img src="./assets/coupon.png" alt="">
                      <div class="column text-wrapper">
                        <h4>SENIOR DISCOUNT</h4>
                        <div class="row">
                          <h5>UP TO</h5>
                          <h3>$79</h3>
                        </div>
                      </div>
                    </li>
                    <li class="special">
                      <img src="./assets/coupon.png" alt="">
                      <div class="column text-wrapper">
                        <h4>TODAY'S SPECIAL</h4>
                        <div class="row">
                          <h3>50%</h3>
                          <h5>OFF</h5>
                        </div>
                      </div></li>
                </ul>
                <div class="crew"><img src="./assets/overlay-banner.png" alt=""></div>
              </div>
        </div>
        <hr class="divider" />
    </div>

    <div class="column about">
      <div class="row why-mcn">
        <div class="column left-side">
          <h2><span class="color-blue">WHY MCN</span><br>GAS PLUMBING</h2>
          <div class="img-wrapper">
            <img src="./assets/overlay-why-mcn.png" alt="">
          </div>
        </div>
        <div class="right-side">
          <div class="timeline">
            <div class="container">
              <div class="content">
                <h4>24/7 Emergency Plumbing Services</h4>
                <p>We are available 24 hours a day 7 days a  week. If you have a plumbing emergency, we’ll make it our priority!</p>
              </div>
            </div>
            <div class="container">
              <div class="content">
                <h4>Fast Same Day Service</h4>
                <p>We guarantee same-day services if you 
                  call before 10:30am – even for non-urgent plumbing jobs.</p>
              </div>
            </div>
            <div class="container">
              <div class="content">
                <h4>Upfront Pricing</h4>
                <p>You can rest assured that the price we quote you is what you will pay at the end of the job,  with no hidden costs!</p>
              </div>
            </div>
            <div class="container">
              <div class="content">
                <h4>All Plumbing Work Guaranteed</h4>
                <p>MCN Plumbing offers 100% guaranteed results across all our work. Ask us about our great range of guarantees!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column cards">
        <ul class="row card-wrapper">
          <li class="column card qualified">
            <div class="top">
              <h4>Fully Qualified<br>Professional</h4>
            </div>
            <div class="bottom"><div class="img-wrapper">
              <img src="./assets/professionals.png" alt="">
            </div></div>
          </li>
          <li class="column card">
            <div class="top">
              <h4>No Mess<br>No Fuss</h4>
            </div>
            <div class="bottom"><div class="img-wrapper">
              <img src="./assets/no-mess.png" alt="">
            </div></div>
          </li>
          <li class="column card">
            <div class="top">
              <h4>Years in Industry</h4>
            </div>
            <div class="bottom"><div class="img-wrapper">
              <img src="./assets/years-industry.png" alt="">
            </div></div>
          </li>
          <li class="column card rating">
            <div class="top">
              <h4>100% Success<br>Rate with 5 Star<br>Reviews</h4>
            </div>
            <div class="bottom">
              <div class="img-wrapper">
                <img src="./assets/rating.png" alt="">
              </div>
            </div>
          </li>
        </ul>
        <ul class="row btn-wrapper">
          <li><a href="" class="book-now">BOOK NOW</a></li>
          <li><a href="" class="call-now">LEARN MORE</a></li>
        </ul>
      </div>
      <div class="headline">
        <h4>LOOKING FOR GAS FITTING AND REPAIR SERVICES IN MELBOURNE?</h4>
        <h3>WE FIX ALL GAS SYSTEMS IN MELBOURNE</h3>
        <ul class="row">
          <li><h3>FREE CALL OUT 0420 102 198</h3></li>
          <li><a href="" class="call-now">CALL NOW</a></li>
        </ul>
        <div class="img-wrapper">
          <img src="./assets/mcn-car.png" alt="">
        </div>
      </div>
      <div class="block"></div>
    </div>
    <div class="row services">
      <div class="left-side">
        <ul class="cards row">
          <li style="background-image: url(./assets/gas-instalation-bg.png);">
            <div class="img-wrapper"><img src="./assets/gas-instalation.png" alt=""></div>
            <h5>NEW GAS<br>INSTALATION</h5>
          </li>
          <li style="background-image: url(./assets/hot-water-bg.png);">
            <div class="img-wrapper"><img src="./assets/hot-water.png" alt=""></div>
            <h5>HOT WATER<br>SYSTEMS</h5>
          </li>
          <li style="background-image: url(./assets/leaking-bg.png);">
            <div class="img-wrapper"><img src="./assets/leaking.png" alt=""></div>
            <h5>LEAKING GAS<br>REPAIRS</h5>
          </li>
          <li style="background-image: url(./assets/fixtures-bg.png);">
            <div class="img-wrapper"><img src="./assets/fixtures.png" alt=""></div>
            <h5>GAS FIXTURES<br>INSTALATION</h5>
          </li>
          <li style="background-image: url(./assets/leaking-pipes-bg.png);">
            <div class="img-wrapper"><img src="./assets/leaking-pipes.png" alt=""></div>
            <h5>LEAKING<br>PIPES</h5>
          </li>
          <li style="background-image: url(./assets/gas-fitting-bg.png);">
            <div class="img-wrapper" ><img src="./assets/gas-fitting.png" alt=""></div>
            <h5>GAS<br>FITTING</h5>
          </li>
        </ul>
      </div>
      <div class="column right-side">
        <h2><span class="color-blue">MCN's</span><br>GAS PLUMBING<br>SERVICES</h2>
        <p>If you’re looking for a plumber in Melbourne, turn to the team at MCN Plumbing. 
          Specialising in a wide range of plumbing services, we can assist you with toilet 
          repairs, tap repairs, leaking pipes, blocked drains, hot water repairs, and gas fitting. 
          Based in Melbourne and backed by more than 30 years of experience, we use the best equipment
          and techniques to provide the right solutions for you</p>
          <div class="plumbing-btn">
            <a href="">LET'S GET PLUMBING</a>
          </div>
      </div>
    </div>
    <div class="special-offer row">
      <div class="left-side">
        <div class="img-wrapper"><img src="./assets/special-offer.png" alt=""></div>
      </div>
      <div class="right-side">
        <h2>SPECIAL OFFERS</h2>
        <ul class="row coupon-wrapper">
          <li>
            <img src="./assets/vertical-coupon.png" alt="">
            <div class="column text-wrapper">
              <h3><span class="header-text">$50</span><br>Voucher</h3>
              <p>Mention this ad to get the $50 off*</p>
            </div>
            <div class="btn-wrapper">
              <a href="">BOOK NOW</a>
            </div>
          </li>
          <li>
            <img src="./assets/vertical-coupon.png" alt="">
            <div class="column text-wrapper">
              <h3>UP TO<br><span class="header-text">$79</span></h3>
              <h4>SENIOR DISCOUNT</h4>
            </div>
            <div class="btn-wrapper">
              <a href="">BOOK NOW</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="container"></div>
      <div class="plumbing-btn">
        <a href="">LET'S GET PLUMBING</a>
      </div>
    </div>
    <div class="brands column">
      <ul class="row brand-wrapper">
        <li><img src="./assets/aquaMax-logo.png" alt=""></li>
        <li><img src="./assets/rinnai-logo.png" alt=""></li>
        <li><img src="./assets/vulcan-logo.png" alt=""></li>
        <li class="rheem-logo"><img src="./assets/rheem-logo.png" alt=""></li>
        <li><img src="./assets/bosch-logo.png" alt=""></li>
      </ul>
      <div class="title-wrapper">
        <h2>BRANDS WE USE</h2>
      </div>
    </div>
    <div class="row more-about">
      <div class="column left-side">
        <h2><span class="header2 color-blue">MORE ABOUT</span><br>GAS PLUMBING</h2>
        <div class="img-wrapper">
          <img src="./assets/more-about-overlay.png" alt="">
        </div>
      </div>
      <div class="right-side">
        <ul class="column">
          <li>
            <div class="left-side" style="background-image: url(./assets/read-more-bg.png);">
            </div>
            <div class="right-side">
              <div class="text-wrapper">
                <h5>Common Summer Plumbing Problems in Melbourne & How to Avoid Them</h5>
                <h6>April 19 2022</h6>
              </div>
              <div class="btn-wrapper">
                <a href="">READ MORE</a>
              </div>
            </div>
          </li>
          <li>
            <div class="left-side" style="background-image: url(./assets/read-more-bg.png);">
            </div>
            <div class="right-side">
              <div class="text-wrapper">
                <h5>Common Summer Plumbing Problems in Melbourne & How to Avoid Them</h5>
                <h6>April 19 2022</h6>
              </div>
              <div class="btn-wrapper">
                <a href="">READ MORE</a>
              </div>
            </div>
          </li>
          <li>
            <div class="left-side" style="background-image: url(./assets/read-more-bg.png);">
            </div>
            <div class="right-side">
              <div class="text-wrapper">
                <h5>Common Summer Plumbing Problems in Melbourne & How to Avoid Them</h5>
                <h6>April 19 2022</h6>
              </div>
              <div class="btn-wrapper">
                <a href="">READ MORE</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="column review">
      <div class="row">
        <div class="column left-side">
          <div class="blue-bg"></div>
          <div class="crew"><img src="./assets/review-banner.png" alt=""></div>
          <div class="google-rating"><img src="./assets/google-rating.png" alt=""></div>
        </div>
        <div class="right-side">
          <h2><span class="color-blue">OUR HAPPY CUSTOMER’S</span><br><span class="font-size-xl">HONEST REVIEW</span></h2>
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
              <input type="text" name="name" id="name" placeholder="Name" style="width:100%"/>
            </li>
            <li>
              <input type="text" name="need" id="need" placeholder="What You Need" style="width:100%"/>
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
              <img src="./assets/logo.png" alt="">
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
                <img src="./assets/visa-card.png" alt="">
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
                  <img src="./assets/location-icon.png" alt="">
                </div>
                <h4>6/43 Scanlon Drive, Epping Victoria 3076, Australia.</h4>
              </li>
              <li>
                <div class="icon-wrapper">
                  <img src="./assets/mail-icon.png" alt="">
                </div>
                <h4>info@mcnplumbing.com.au</h4>
              </li>
              <li>
                <div class="icon-wrapper">
                  <img src="./assets/facebook-icon.png" alt="">
                </div>
                <h4>MCN Plumbing</h4>
              </li>
            </ul>
          </div>
          <div class="img-wrapper">
            <img src="./assets/mcn-car.png" alt="">
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
