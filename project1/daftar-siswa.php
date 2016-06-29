<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Let's Care - Lorem Ipsum Dolor Sit Amet</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-still">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php">
                    <img class="img-responsive" src="img/quenda.png" alt="">
                </a>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">Let's Care</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="daftar.php">Daftar Sebagai Orang Tua Asuh</a>
                    </li>
                    <li class="active">
                        <a class="page-scroll" href="daftar-siswa.php">Daftar Sebagai Anak Asuh</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll btn" id="mulai" href="#vid">MULAI</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    

    <!-- Register Section -->
    <section id="registration" class="bg-light-gray">
        <div class="container" id="registration">
            <div class="row">
                <div class="col-lg-6 text-left">
                    <h2 class="section-heading">Bargabunglah Dolor Sit Amet</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    Lalala
                </div>
                <div class="col-lg-6">
                    <!-- multistep form -->
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Account Setup</li>
                            <li>Personal Details</li>
                            <li>One Last Thing</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <h2 class="fs-title">Create your account</h2>
                            <h3 class="fs-subtitle">This is step 1</h3>
                            <input type="text" name="email" placeholder="Email" />
                            <input type="password" name="pass" placeholder="Password" />
                            <input type="password" name="cpass" placeholder="Konfirmasi Password" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Personal Details</h2>
                            <h3 class="fs-subtitle">This is step 2</h3>
                            <input type="text" name="fname" placeholder="Nama Depan" />
                            <input type="text" name="lname" placeholder="Nama Belakang" />
                            <select name="gender">
                                <option value="" disabled selected>Jenis Kelamin</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                            <input type="text" name="phone" placeholder="Nomor HP" />
                            <textarea name="address" placeholder="Alamat"></textarea>
                            <select name="province">
                                <option value="" disabled selected>Provinsi</option>
                                <option>Aceh</option><option>Bali</option><option>Banten</option><option>Bengkulu</option><option>Gorontalo</option><option>Jakarta</option><option>Jambi</option><option>Jawa Barat</option><option>Jawa Tengah</option><option>Jawa Timur</option><option>Kalimantan Barat</option><option>Kalimantan Selatan</option><option>Kalimantan Tengah</option><option>Kalimantan Timur</option><option>Kalimantan Utara</option><option>Kepulauan Bangka Belitung</option><option>Kepulauan Riau</option><option>Lampung</option><option>Maluku</option><option>Maluku Utara</option><option>Nusa Tenggara Barat</option><option>Nusa Tenggara Timur</option><option>Papua</option><option>Papua Barat</option><option>Riau</option><option>Sulawesi Barat</option><option>Sulawesi Selatan</option><option>Sulawesi Tengah</option><option>Sulawesi Tenggara</option><option>Sulawesi Utara</option><option>Sumatera Barat</option><option>Sumatera Selatan</option><option>Sumatera Utara</option><option>Yogyakarta</option>
                            </select>
                            <select name="city">
                                <option value="" disabled selected>Kota</option>
                                <option>Jakarta Barat</option>
                                <option>Jakarta Pusat</option>
                                <option>Jakarta Selatan</option>
                                <option>Jakarta Tengah</option>
                                <option>Jakarta Timur</option>
                                <option>Kepulauan Seribu</option>
                            </select>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">One Last Thing</h2>
                            <h3 class="fs-subtitle">This is step 3</h3>
                            <select name="job">
                                <option value="" disabled selected>Pekerjaan</option>
                                <option>Aceh</option><option>Bali</option><option>Banten</option><option>Bengkulu</option><option>Gorontalo</option><option>Jakarta</option><option>Jambi</option><option>Jawa Barat</option><option>Jawa Tengah</option><option>Jawa Timur</option><option>Kalimantan Barat</option><option>Kalimantan Selatan</option><option>Kalimantan Tengah</option><option>Kalimantan Timur</option><option>Kalimantan Utara</option><option>Kepulauan Bangka Belitung</option><option>Kepulauan Riau</option><option>Lampung</option><option>Maluku</option><option>Maluku Utara</option><option>Nusa Tenggara Barat</option><option>Nusa Tenggara Timur</option><option>Papua</option><option>Papua Barat</option><option>Riau</option><option>Sulawesi Barat</option><option>Sulawesi Selatan</option><option>Sulawesi Tengah</option><option>Sulawesi Tenggara</option><option>Sulawesi Utara</option><option>Sumatera Barat</option><option>Sumatera Selatan</option><option>Sumatera Utara</option><option>Yogyakarta</option>
                            </select>
                            <div class="g-recaptcha" data-sitekey="6LcRwCMTAAAAAErRR1Mac_rDmEiyghQ7KejR9S2e"></div>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <input type="submit" name="submit" class="submit action-button" value="Submit" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1>
                        contact info
                    </h1>
                    <address>
                        <p><i class="fa fa-home pr-10"></i> Address: No.XXXXXX</p>
                        <p><i class="fa fa-globe pr-10"></i> Jakarta, Indonesia </p>
                        <p><i class="fa fa-mobile pr-10"></i> Mobile : (123) 456-7890 </p>
                        <p><i class="fa fa-phone pr-10"></i> Phone : (123) 456-7890 </p>
                        <p><i class="fa fa-envelope pr-10"></i> Email :   <a href="javascript:;">support@example.com</a></p>
                    </address>
                </div>
                <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                    <h1>latest tweet</h1>
                    <a class="twitter-timeline" href="https://twitter.com/LetsCareID" data-tweet-limit="1">Tweets by LetsCareID</a> <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script></a>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                        <h1>
                            Our Company
                        </h1>
                        <ul class="page-footer-list">
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="#">FAQs</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="team.html">Our Team</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="#">Support</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="#">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <h1>
                            Text Widget
                        </h1>
                        <p>
                            This is a text widget.Lorem ipsum dolor sit amet.
                            This is a text widget.Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="copyright">
                        <p>Copyright &copy; LetsCare.id 2016. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--small footer end-->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>