<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | SAGOE</title>
    </head>
    <!--/head-->
    <body>
        <header id="header"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 overflow">
                        <div class="social-icons pull-right">
                            <ul class="nav nav-pills">
								<li><a target="_blank" href="http://pmktr.org/"> <i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="http://pmktr.org/"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="http://pmktr.org/"><i class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="http://pmktr.org/"><i class="fa fa-dribbble"></i></a></li>
                                <li><a target="_blank" href="http://pmktr.org/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>                         
                    </div>
                </div>
            </div>
            <div class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url('index.php/Welcome/home');?>">
                        <h1><img src="<?php echo base_url('gambar/images/logo.png');?>" alt="logo"></h1> </a>

                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="<?php echo base_url('index.php/Welcome/home');?>">Home</a></li>
                            <li class="dropdown">
                                <a href="#">RESERVASI&nbsp;<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="<?php echo base_url('index.php/Welcome/aboutus');?>" >Tentang Kami</a></li>        
                                    <li><a href="<?php echo base_url('index.php/Welcome/service');?>" >Layanan</a></li>
                                    <li><a href="<?php echo base_url('index.php/Welcome/pricing');?>" >Harga</a></li>
                                </ul>
                            </li>                             
                                    <li><a href="<?php echo base_url('index.php/Welcome/portfolio');?>" >Portofolio</a></li>                                                       
                        </ul>
                    </div>
                    <div class="search">
                        <form role="form">
                            <i class="fa fa-search"></i>
                            <div class="field-toggle">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!--/#header-->
        <section id="home-slider">
            <div class="container">
                <div class="row">
                    <div class="main-slider">
                        <div class="slide-text">
                            <h1>SANGGAR ANEUK NANGGROE</h1>
                            <p>SANGGAR ANEUK NANGGROE(SAGOE) merupakan komunitas seni yang terdiri dari mahasiswa yang berada di Surabaya. &nbsp;</p>
                            <a href="<?php echo base_url('index.php/Welcome/pricing');?>" class="btn btn-common">RESERVASI DISINI</a>

                        </div>
                        <img src="<?php echo base_url('gambar/images/home/slider/hl.png');?>" class="slider-hill" alt="slider image"> 
                        <!--<img src="<?php echo base_url('gambar/images/home/tour-icon1.png');?>" class="slider-house" alt="slider image">--> 
                        <img src="<?php echo base_url('gambar/images/home/slider/sun.png');?>" class="slider-sun" alt="slider image"> 
                        <img src="<?php echo base_url('gambar/images/home/slider/birds1.png');?>" class="slider-birds1" alt="slider image">				
                        <img src="<?php echo base_url('gambar/images/home/slider/birds1.png');?>" class="slider-birds2" alt="slider image">  
                    </div>
                </div>
            </div>
            <div class="preloader">
                <i class="fa fa-sun-o fa-spin"></i>
            </div>
        </section>
        <!--/#home-slider-->
        <!--/#home-slider-->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                 <img src="<?php echo base_url('gambar/images/home/icon1.png');?>" alt=""> 
                            </div>
                            <h2>Basic</h2>
                            <p>Basic, merupakan salah satu paket untuk melakukan reservasi penari di SAGOE.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                                <img src="<?php echo base_url('gambar/images/home/icon2.png');?>" alt=""> 
                            </div>
                            <h2>Silver</h2>
                            <p>Silver, merupakan salah satu paket untuk melakukan reservasi penari di SAGOE.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                               <img src="<?php echo base_url('gambar/images/home/icon3.png');?>" alt=""> 
                            </div>
                            <h2>Gold</h2>
                            <p>Gold, merupakan salah satu paket untuk melakukan reservasi penari di SAGOE.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#services-->
        <section id="action" class="responsive">
            <div class="vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="action take-tour">
                            <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                                <h1 class="title">Ingin Melakukan Reservasi ?</h1>
                                <p>Silahkan melakukan reservasi pada tombol disamping ini</p>
                            </div>
                            <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="tour-button">
                                     <a href="<?php echo base_url('index.php/Welcome/pricing');?>" class="btn btn-common">RESERVASI DISINI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#action-->
        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="single-features">
                        <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="<?php echo base_url('gambar/images/home/image1.png');?>" class="img-responsive" alt=""> 
                        </div>
                        <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h2>Berpengalaman dan Antusias</h2>
                            <p>Semakin berpengalamannya penari akan semakin luwes pula menarinya. Antusias juga diperlukan bagi seorang penari agar para penonton lebih bersemangat dalam melihat pertunjukannya</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h2>Kerja Sama Tim yang Baik<br></h2>
                            <p>Kerjasama yang baik dibutuhkan sebagai kolaborasi antar penari.&nbsp;</p>
                        </div>
                        <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="<?php echo base_url('gambar/images/home/image2.png');?>"  class="img-responsive" alt=""> 
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="<?php echo base_url('gambar/images/home/image3.png');?>"  class="img-responsive" alt=""> 
                        </div>
                        <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h2>Kegigihan Berlatih</h2>
                            <p>Ut officia Kegigihan, ketekunan juga merupakan kunci dalam menjadi seorang penari yang handal. dibuthkan waktu yang berkepanjangan untuk menjadi penari yang profesional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#features-->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                            <p><img src="<?php echo base_url('gambar/images/home/clients.png');?>"  class="img-responsive" alt=""> </p>
                            <h1 class="title">Klien Kami</h1>
                            <p>Berikut nama-nama dari klien kami</p>
                        </div>
                        <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="col-xs-3 col-sm-2">
                                <a href="#">
                                    <img src="<?php echo base_url('gambar/images/home/client1.png');?>" class="img-responsive" alt=""> 
                                </a>
                            </div>
                            <div class="col-xs-3 col-sm-2">
                                <a href="#">                       
                                    <img src="<?php echo base_url('gambar/images/home/client2.png');?>" class="img-responsive" alt=""> 
                                </a>
                            </div>
                            <div class="col-xs-3 col-sm-2">
                                <a href="#">
                                    <img src="<?php echo base_url('gambar/images/home/client3.png');?>" class="img-responsive" alt=""> 
                                </a>
                            </div>
                            <div class="col-xs-3 col-sm-2">
                                <a href="#">
                                    <img src="<?php echo base_url('gambar/images/home/client4.png');?>" class="img-responsive" alt=""> 
                                </a>
                            </div>
                            <div class="col-xs-3 col-sm-2">
                                <a href="#">
                                    <img src="<?php echo base_url('gambar/images/home/client5.png');?>" class="img-responsive" alt=""> 
                                </a>
                            </div>
                            <div class="col-xs-3 col-sm-2">
                                <a href="#">
                                    <img src="<?php echo base_url('gambar/images/home/client6.png');?>" class="img-responsive" alt=""> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#clients-->    
    </body>
</html>
