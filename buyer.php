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
  </nav><br>

  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light"style="margin: 0 auto;">
                    <form id="contact_form" method="POST">
                        <h2>buyer</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="name">
                        </div>
                        <input type="hidden" name="type" value="1">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder=" passward" name="passward">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="comfirm passward" name="confirm">

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary py-3 px-5" type="submit" name='submit'>submit</button>

                        </div>
                    </form>
                </div>
              
            </div>
        </div>
    </section>
    <br>
    


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