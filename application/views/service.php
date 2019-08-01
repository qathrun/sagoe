<!DOCTYPE html>
<html lang="en">
<head>
    <title>Layanan | SAGOE</title>
</head>

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
                        <h1><img src="<?php echo base_url('gambar/images/logo.png');?>" alt="logo"> </a></h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('index.php/Welcome/home');?>">Home</a></li>
                        <li class="dropdown active"><a href="#">RESERVASI <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
							<li><a href="<?php echo base_url('index.php/Welcome/aboutus');?>">Tentang Kami</a></li>
                            <li><a class="active"  <a href="<?php echo base_url('index.php/Welcome/service');?>">Layanan</a><li>
                            <li><a href="<?php echo base_url('index.php/Welcome/pricing');?>">Harga</a></li>				    
                            </ul>
                        </li>                    
                        <li><a href="<?php echo base_url('index.php/Welcome/portfolio');?>" >PORTOFOLIO</a></li>                   
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

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Layanan</h1>
                            <p>Gerakan kecil = Gebrakan besar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="choose">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                     <img src="<?php echo base_url('gambar/images/home/image3.png');?>" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <h2>Mengapa anda memilih kami?</h2>
                    <p>....</p>
                    <ul class="elements">
                        <li class="wow fadeInUp" data-wow-duration="900ms" data-wow-delay="100ms"><i class="fa fa-angle-right"></i> Tim penari yang profesional.</li>
                        <li class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="200ms"><i class="fa fa-angle-right"></i> Tim penari yang hebat.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#company-information-->

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
<!--penampilan terbaru-->
    <section id="recent-projects" class="recent-projects">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Penampilan Terbaru</h1>
                <p class="text-center padding-bottom wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Berikut penampilan kami dibeberapa kegiatan.</p>
                
				
				<!-- Awal-->
				<?php foreach($penampilan_terbaru as $u){ ?>
				<div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="portfolio-wrapper">   
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
							
							
                                <img src="<?php echo base_url('/upload/'.$u->gambar);?>" class="img-responsive" alt="">
							
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="<?php echo base_url('/upload/'.$u->gambar);?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                           <h2><?php echo $u->nama_penampilan?></h2>
                        </div>
						
                    </div>
                </div>
				<?php } ?>
				<!-- Akhir-->
				
                
    </section>
    <!--/#recent-projects-->

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
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#">
                            <img src="<?php echo base_url('gambar/images/home/client1.png');?>" class="img-responsive" alt=""> 
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#">
                            <img src="<?php echo base_url('gambar/images/home/client1.png');?>" class="img-responsive" alt=""> 
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#">
                            <img src="<?php echo base_url('gambar/images/home/client1.png');?>" class="img-responsive" alt=""> 
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#">
                            <img src="<?php echo base_url('gambar/images/home/client1.png');?>" class="img-responsive" alt=""> 
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#">
                            <img src="<?php echo base_url('gambar/images/home/client1.png');?>" class="img-responsive" alt=""> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->
</body>
</html>
