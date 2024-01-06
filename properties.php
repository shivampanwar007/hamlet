<?php
$con = mysqli_connect("localhost", "root", "", "hamlet");
?>
<!DOCTYPE php>
<php lang="en">

    <!-- Mirrored from preview.colorlib.com/theme/hamlet/properties.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 11:56:28 GMT -->

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
        <script nonce="ba42e772-90e5-4bf4-a0f6-342a987b5fa1">
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
    
  <?php
 include "header.php";
?>
        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <h1 class="mb-2 bread">Properties</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index-2.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties <i class="ion-ios-arrow-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="search-wrap">
                            <h3>Advance Search</h3>
                            <form action="#" class="search-property">
                                <div class="row">
                                    <div class="col-md-12 align-items-end ftco-animate">
                                        <div class="form-group">
                                            <label for="#">Keyword</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-pencil"></span></div>
                                                <input type="text" class="form-control" placeholder="Keyword">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 align-items-end ftco-animate">
                                        <div class="form-group">
                                            <label for="#">Location</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-pencil"></span></div>
                                                <input type="text" class="form-control" placeholder="City/Locality Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 align-items-end ftco-animate">
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
                                    <div class="col-md-12 align-items-end ftco-animate">
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
                                    <div class="col-md-12 align-items-end ftco-animate">
                                        <div class="form-group">
                                            <label for="#">Agents</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Any</option>
                                                        <option value="">Jonh Doe</option>
                                                        <option value="">Doe Mags</option>
                                                        <option value="">Kenny Scott</option>
                                                        <option value="">Emily Storm</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 align-items-end ftco-animate">
                                        <div class="form-group">
                                            <label for="#">Min Beds</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 align-items-end ftco-animate">
                                        <div class="form-group">
                                            <label for="#">Min Bathroom</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 align-items-end ftco-animate">
                                        <div class="form-group">
                                            <label for="#">Min Price</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Min Price</option>
                                                        <option value="">$1,000</option>
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
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 align-items-end ftco-animate">
                                        <div class="form-group">
                                            <label for="#">Max Price</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Max Price</option>
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
                                    <div class="col-md-12 align-items-end ftco-animate">
                                        <div class="form-group">
                                            <label for="#">Min Area <span>(sq ft)</span></label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-pencil"></span></div>
                                                <input type="text" class="form-control" placeholder="Min Area">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 align-items-end ftco-animate">
                                        <div class="form-group">
                                            <label for="#">Max Area <span>(sq ft)</span></label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-pencil"></span></div>
                                                <input type="text" class="form-control" placeholder="Max Area">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 align-self-end ftco-animate">
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
                    <div class="col-lg-9">
                        <div class="row">
                            <?php
                            // print krane ke liye
                            $sql = mysqli_query($con, "SELECT * from propimg");
                            while ($row = mysqli_fetch_assoc($sql)) {
                            ?>
                                <div class="col-md-6 col-lg-4 ftco-animate">
                                    <div class="project">
                                        <div class="img">
                                            <a href="image.php"><img src="images/<?php echo $row['image'] ?>" class="img-fluid" alt="Colorlib Template"></a>
                                            <div class="text">
                                                <span>Sale</span>
                                                <h3><a href="properties-single.php?id=<?php echo $row['id'] ?>"><?php echo $row['property_name'] ?></a></h3>
                                            </div>
                                        </div>
                                        <div class="desc pt-3">
                                            <h4 class="price"><?php echo $row['price'] ?></h4>
                                            <p class="h-info"><span class="location"><?php echo $row['city'] ?></span> <span class="details">&mdash; 3bds, 2bath</span></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>



                        </div>
                        <div class="row no-gutters my-5">
                            <div class="col text-center">
                                <div class="block-27">
                                    <ul>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="ftco-footer ftco-section">
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
                            <form id="subscribe-form" method="POST">
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
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bce28fcdf39f3b5","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
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
    <!-- Mirrored from preview.colorlib.com/theme/hamlet/properties.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 11:56:31 GMT -->
</php>