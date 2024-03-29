<?php
$con = mysqli_connect("localhost", "root", "", "hamlet");
?>
<!DOCTYPE php>
<php lang="en">

<!-- Mirrored from preview.colorlib.com/theme/hamlet/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 11:55:57 GMT -->

<head>
  <title>Hamlet - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <script nonce="74d0310e-daaf-4c41-a2b3-18c1cb2667c9">
    (function(w, d) {
      ! function(f, g, h, i) {
        f[h] = f[h] || {};
        f[h].executed = [];
        f.zaraz = {
          deferred: [],
          listeners: []
        };
        f.zaraz.q = [];
        f.zaraz._f = function(j) {
          return function() {
            var k = Array.prototype.slice.call(arguments);
            f.zaraz.q.push({
              m: j,
              a: k
            })
          }
        };
        for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
        f.zaraz.init = () => {
          var m = g.getElementsByTagName(i)[0],
            n = g.createElement(i),
            o = g.getElementsByTagName("title")[0];
          o && (f[h].t = g.getElementsByTagName("title")[0].text);
          f[h].x = Math.random();
          f[h].w = f.screen.width;
          f[h].h = f.screen.height;
          f[h].j = f.innerHeight;
          f[h].e = f.innerWidth;
          f[h].l = f.location.href;
          f[h].r = g.referrer;
          f[h].k = f.screen.colorDepth;
          f[h].n = g.characterSet;
          f[h].o = (new Date).getTimezoneOffset();
          if (f.dataLayer)
            for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                ...t[1],
                ...u[1]
              }))))) zaraz.set(s[0], s[1], {
              scope: "page"
            });
          f[h].q = [];
          for (; f.zaraz.q.length;) {
            const v = f.zaraz.q.shift();
            f[h].q.push(v)
          }
          n.defer = !0;
          for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith("_zaraz_"))).forEach((x => {
            try {
              f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
            } catch {
              f[h]["z_" + x.slice(7)] = w.getItem(x)
            }
          }));
          n.referrerPolicy = "origin";
          n.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
          m.parentNode.insertBefore(n, m)
        };
        ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, "zarazData", "script");
    })(window, document);
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index-2.php">Hamlet.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="properties.php" class="nav-link">Properties</a></li>
          <li class="nav-item"><a href="agents.php" class="nav-link">Agents</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="signup.php" class="nav-link"><span>Sign Up</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="home-slider owl-carousel">
    <div class="slider-item">
      <div class="overlay"></div>
      <div class="container d-md-block d-none">
        <div class="row d-md-flex slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <div class="text pb-4 pt-5">
              <h1 class="mb-4">Taylor Plan, Orchard House</h1>
              <div class="desc">
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="img" style="background-image:url(images/bg_2.jpg);">
        <div class="container">
          <div class="row d-flex justify-content-start">
            <div class="col-md-6 col-lg-4">
              <div class="details p-5">
                <span class="cat d-block mb-4">House</span>
                <h3 class="mb-3">Taylor Plan, Orchard House</h3>
                <p class="loc"><span class="icon-my_location mr-2"></span> Melbourne, Vic 3004, NC USA</p>
                <ul class="mb-4">
                  <li><span>Area:</span> <span>250sqft</span></li>
                  <li><span>Bedroom</span> <span>3</span></li>
                  <li><span>Bathroom:</span> <span>3</span></li>
                  <li><span>Garage:</span> <span>1</span></li>
                </ul>
                <p><a href="#" class="btn btn-black btn-outline-black py-3">View Properties</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-item">
      <div class="overlay"></div>
      <div class="container d-md-block d-none">
        <div class="row d-md-flex slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <div class="text pb-4 pt-5">
              <h1 class="mb-4">Rose Villa, USA</h1>
              <div class="desc">
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="img" style="background-image:url(images/bg_1.jpg);">
        <div class="container">
          <div class="row d-flex justify-content-start">
            <div class="col-md-6 col-lg-4">
              <div class="details p-5">
                <span class="cat d-block mb-4">House</span>
                <h3 class="mb-3">Rose Villa, USA</h3>
                <p class="loc"><span class="icon-my_location mr-2"></span> Melbourne, Vic 3004, NC USA</p>
                <ul class="mb-4">
                  <li><span>Area:</span> <span>250sqft</span></li>
                  <li><span>Bedroom</span> <span>3</span></li>
                  <li><span>Bathroom:</span> <span>3</span></li>
                  <li><span>Garage:</span> <span>1</span></li>
                </ul>
                <p><a href="#" class="btn btn-black btn-outline-black py-3">View Properties</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="search-wrap-1 ftco-animate p-4 px-5">
            <form action="#" class="search-property-1">
              <div class="row">
                <div class="col-lg align-items-end">
                  <div class="form-group">
                    <label for="#">Location</label>
                    <div class="form-field">
                      <div class="icon"><span class="ion-ios-search"></span></div>
                      <input type="text" class="form-control" placeholder="City/Locality Name">
                    </div>
                  </div>
                </div>
                <div class="col-lg align-items-end">
                  <div class="form-group">
                    <label for="#">Property Type</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Type</option>
                          <option value="">Commercial</option>
                          <option value="">- Office</option>
                          <option value="">Residential</option>
                          <option value="">Villa</option>
                          <option value="">Condominium</option>
                          <option value="">Apartment</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg align-items-end">
                  <div class="form-group">
                    <label for="#">Property Status</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Type</option>
                          <option value="">Rent</option>
                          <option value="">Sale</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg align-items-end">
                  <div class="form-group">
                    <label for="#">Price Limit</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">$5,000</option>
                          <option value="">$10,000</option>
                          <option value="">$50,000</option>
                          <option value="">$100,000</option>
                          <option value="">$200,000</option>
                          <option value="">$300,000</option>
                          <option value="">$400,000</option>
                          <option value="">$500,000</option>
                          <option value="">$600,000</option>
                          <option value="">$700,000</option>
                          <option value="">$800,000</option>
                          <option value="">$900,000</option>
                          <option value="">$1,000,000</option>
                          <option value="">$2,000,000</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg align-self-end">
                  <div class="form-group">
                    <div class="form-field">
                      <input type="submit" value="Search" class="form-control btn btn-primary">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pb">
    <div class="container">
      <div class="row justify-content-start mb-5">
        <div class="col-md-8 heading-section ftco-animate">
          <h2 class="mb-4">Recently Added</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
        </div>
      </div>
      <div class="row">


        <div class="col-md-12">
          <div class="carousel-properties owl-carousel">

            <?php
            // print krane ke liye
            $sql = mysqli_query($con, "SELECT * from image");
            while ($row = mysqli_fetch_assoc($sql)) {
            ?>
              <div class="item">
                <div class="project">
                  <div class="img">
                    <img src="images/<?php echo $row['iamge'] ?>" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                      <span>Sale</span>
                      <h3><a href="properties.php">shivam <br> Subdivision</a></h3>
                    </div>
                  </div>
                  <div class="desc pt-3">
                    <h4 class="price"><?php echo $row['price'] ?></h4>
                    <p class="h-info"><span class="location"><?php echo $row['loc'] ?></span> <span class="details">&mdash; 3bds, 2bath</span></p>
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>

        </div>

      </div>
  </section>
  <section class="ftco-section ftco-no-pb">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/About.php);">
        </div>
        <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
          <div class="heading-section mb-4 ml-md-4 pl-md-5">
            <h2 class="mb-4">We can help you to find luxurious and beautiful properties in your local area</h2>
          </div>
          <div class="pl-md-5 ml-md-4 mb-5">
            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
            <div class="row my-5 pt-2">
              <div class="col-lg-6">
                <div class="services-2 px-4 text-center">
                  <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-pin"></span></div>
                  <div class="text">
                    <h3>Find Places Anywhere In The World</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 px-4 text-center">
                  <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-detective"></span></div>
                  <div class="text">
                    <h3>We Have Agents With Experience</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 px-4 text-center">
                  <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-house"></span></div>
                  <div class="text">
                    <h3>Buy &amp; Rent Modern Properties</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 px-4 text-center">
                  <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-purse"></span></div>
                  <div class="text">
                    <h3>Making Money</h3>
                  </div>
                </div>
              </div>
            </div>
            <p><a href="#" class="btn-custom">Learn More <span class="ml-2 ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="heading-section mb-5 ftco-animate">
            <h2 class="mb-4">Welcome to Hamlet A Real Estate Agency</h2>
            <p>Far far away, behind the word mountains, far from the countries</p>
          </div>
          <div class="about-img img p-5 d-flex align-items-center" style="background-image: url(images/bg_1.jpg);">
            <div class="about-div">
              <h4 style="color:white;">Buying A Properties the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</h4>
              <p class="mb-0"><a href="#" class="btn-custom-2">Read more <span class="ml-2 icon-long-arrow-right"></span></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex">
          <div class="img img-3 p-5 d-flex align-self-stretch border" style="background-image: url(images/about-3.php);">
            <div class="about-div bg-darken about-wrap">
              <h4 style="color:white;">Renting A Properties Pointing has no control about the blind texts it is an almost unorthographic life.</h4>
              <p class="mb-0"><a href="#" class="btn-custom-2">Read more <span class="ml-2 icon-long-arrow-right"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pt testimony-section">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Our satisfied customer says</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
          <?php
        // print krane ke liye
        $sql=mysqli_query($con, "SELECT * from test");
        while($row=mysqli_fetch_assoc($sql))
        {
        ?>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style='background-image: url("images/<?php echo $row['image'] ?>");'>
                </div>
                <div class="text">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p class="mb-4 line"><?php echo $row['subject'] ?>.</p>
                  <div class="mb-4">
                    <p class="name"><?php echo $row['name'] ?></p>
                    <span class="position">Buyer</span>
                  </div>
                </div>
              </div>
            </div>

            <?php
           } 
           ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pt">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-5 heading-section ftco-animate">
          <h2 class="mb-4">Press Releases</h2>
          <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
          <p><a href="#" class="btn-custom">Read our blog <span class="ml-2 ion-ios-arrow-forward"></span></a></p>
        </div>
        <div class="col-md-9">
          <div class="row">
          <?php
        // print krane ke liye
        $sql=mysqli_query($con, "SELECT * from image2");
        while($row=mysqli_fetch_assoc($sql))
        {
        ?>
            <div class="col-md-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.php" class="block-20" style='background-image: url("images/<?php echo $row['image'] ?>");'>
                </a>
                <div class="text py-4">
                  <div class="meta mb-2">
                    <div><a href="#">Jan. 20, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <div class="desc">
                    <h3 class="heading"><a href="#"><?php echo $row['tittle'] ?></a></h3>
                  </div>
                </div>
              </div>
            </div>

            <?php
           } 
           ?>

         
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pb ftco-no-pt ftco-counter img ftco-animate" id="section-counter">
    <div class="container">
      <div class="row d-md-flex align-items-center justify-content-start">
        <div class="col-lg-10">
          <div class="bg-counter p-4">
            <div class="row py-2 d-md-flex align-items-center">
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="1000">0</strong>
                    <span>Properties</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="351">0</strong>
                    <span>Happy Clients</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="564">0</strong>
                    <span>Finished Projects</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="300">0</strong>
                    <span>Working Days</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="ftco-footer ftco-footer-2 ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Hamlet.</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Company</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQ</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Stories</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Explore</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Privacy</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Policy</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Terms</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Review</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Features</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Get Started</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Buy</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Rent</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Payment</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Mortgage</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Loan</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Newsletter</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
            
<form  id="subscribe-form" method="POST">
<div class="form-group">
<input type="text" class="form-control mb-2 text-center" placeholder="Enter email address" name="email">
<input type="submit" value="Subscribe" name="sub" class="form-control submit px-3">
</div>
<input type="hidden" name="type" value="1">
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bce28d2bf8bf3b5","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    $(Document).ready(function() {
        $('#subscribe-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "sub.php",
                method: "POST",
                data: $('#subscribe-form').serialize(),
                success: function(data) {
                    alert(data);
                    window.location.reload();
                }
            });
        });
    });
</script>
<!-- Mirrored from preview.colorlib.com/theme/hamlet/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 11:56:19 GMT -->

</php>