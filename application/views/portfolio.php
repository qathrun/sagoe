<!DOCTYPE html>
<html lang="en">
<head>
    <title>PORTOFOLIO | SAGOE</title>
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
                        <h1><img src="<?php echo base_url('gambar/images/logo.png');?>" alt="logo"></h1> </a>              
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('index.php/Welcome/home');?>">Home</a></li>
                        <li class="dropdown"><a href="#">RESERVASI <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url('index.php/Welcome/aboutus');?>">Tentang Kami</a> 
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/Welcome/service');?>">Layanan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/Welcome/pricing');?>">Harga</a>
                                </li>                                                                                            
                            </ul>
                        </li>                    
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/portfolio');?>" >PORTOFOLIO</a>
                        </li>                     
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
                            <h1 class="title">Portofolio</h1>
                            <p>Lestarikan Budaya Bangsamu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default active" href="#" data-filter="*">SEMUA</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".branded">SAGOE</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".design">ACEH</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".folio">MAKANAN</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".logos">ALAM</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".mobile">BUDAYA</a></li>
                </ul><!--/#portfolio-filter-->   
                <div class="portfolio-items">
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url('gambar/images/portfolio/tim.png');?>" class="img-responsive" alt=""> 
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="<?php echo base_url('gambar/images/portfolio/tim.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url('gambar/images/portfolio/1.jpg');?>" class="img-responsive" alt=""> 
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="<?php echo base_url('gambar/images/portfolio/1.jpg');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url('gambar/images/portfolio/tim.png');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                         <li><a href="<?php echo base_url('gambar/images/portfolio/tim.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url('gambar/images/portfolio/port1.png');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                         <li><a href="<?php echo base_url('gambar/images/portfolio/port1.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mobile">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url('gambar/images/portfolio/port2.png');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                         <li><a href="<?php echo base_url('gambar/images/portfolio/port2.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url('gambar/images/portfolio/2.jpg');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                         <li><a href="<?php echo base_url('gambar/images/portfolio/2.jpg');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url('gambar/images/portfolio/tim.png');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="<?php echo base_url('gambar/images/portfolio/tim.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                     <img src="<?php echo base_url('gambar/images/portfolio/1.jpg');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="<?php echo base_url('gambar/images/portfolio/1.jpg');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url('gambar/images/portfolio/port1.png');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                         <li><a href="<?php echo base_url('gambar/images/portfolio/port1.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                     <img src="<?php echo base_url('gambar/images/portfolio/2.jpg');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="<?php echo base_url('gambar/images/portfolio/2.jpg');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                     <img src="<?php echo base_url('gambar/images/portfolio/1.jpg');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                          <li><a href="<?php echo base_url('gambar/images/portfolio/1.jpg');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url('gambar/images/portfolio/tim.png');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="<?php echo base_url('gambar/images/portfolio/tim.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO/h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design mobile">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                     <img src="<?php echo base_url('gambar/images/portfolio/port1.png');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="<?php echo base_url('gambar/images/portfolio/port1.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                     <img src="<?php echo base_url('gambar/images/portfolio/tim.png');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="<?php echo base_url('gambar/images/portfolio/tim.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                     <img src="<?php echo base_url('gambar/images/portfolio/port2.png');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                       <li><a href="<?php echo base_url('gambar/images/portfolio/port2.png');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                     <img src="<?php echo base_url('gambar/images/portfolio/1.jpg');?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                       <li><a href="<?php echo base_url('gambar/images/portfolio/1.jpg');?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>ITS-EXPO</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li class="active"><a href="#">left</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">right</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->  
</body>
</html>
