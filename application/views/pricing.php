<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pricing Table | SAGOE</title>
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
                            <li>
                                <a href="<?php echo base_url('index.php/Welcome/home');?>"> Home</a>
                            </li>
                            <li class="dropdown active">
                                <a href="#">RESERVASI<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li>
                                        <a href="<?php echo base_url('index.php/Welcome/aboutus');?>">Tentang Kami</a> 
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('index.php/Welcome/service');?>">Layanan</a>
                                    </li>
                                    <li>
                                        <a class="active" href="<?php echo base_url('index.php/Welcome/pricing');?>"> Harga</a>
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
                                <h1 class="title">Harga Paket</h1>
                                <p>Pilihlah tipe paket sesuai kebutuhan anda.</p>
                            </div>                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#action-->
        <section class="container"> 
            <div class="price-table">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="single-price price-one">
                            <div class="table-heading">
                                <p class="plan-name">Basic</p>
                                <p class="plan-price"><span class="dollar-sign">Rp</span><span class="price">300.000</span><span class="month">/ Pertunjukan</span></p>
                            </div>
                            <ul> 
                                <li>Jumlah penari 5 - 6 Orang 
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Menampilkan 1 Jenis Tarian 
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Jenis tarian dipilih pada halaman pengisian data Reservasi
                                    <span><i class="fa fa-check"></i></span> 
                                </li>
                            </ul>
							
							 <!--<a class="btn btn-buynow" name="reservasi" value="basic" method="post" href="<?php echo base_url('index.php/Welcome/reservasi');?>" >
							 Reservasi Sekarang</a> -->
							
							<form method="POST" action=<?php echo base_url('index.php/Welcome/reservasi');?> class="btn btn-buynow">
							<input type="hidden" name="jenis" value="basic" >
							<button type="submit" class="btn btn-info">Reservasi sekarang</button>
							</form>
							
							 
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-price price-two">
                            <div class="table-heading">
                                <p class="plan-name">Silver</p>
                                <p class="plan-price"><span class="dollar-sign">Rp</span><span class="price">450.000</span><span class="month">/ Pertunjukan</span></p>
                            </div>                             
                            <ul>
                                <li>Jumlah penari 6 - 8 Orang
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Menampilkan 2 jenis tarian  
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Jenis tarian dipilih pada halaman pengisian data Reservasi
                                    <span><i class="fa fa-check"></i></span> 
                                </li>
                            </ul>
                             <!--<a href="<?php echo base_url('index.php/Welcome/reservasi');?>" class="btn btn-buynow">RESERVASI SEKARANG</a>-->
							 <!--<form method="POST" action="reservasi" class="btn btn-buynow">
							<input type="hidden" name="jenis" value="silver" >
							<button>Reservasi sekarang</button>-->
							<form method="POST" action=<?php echo base_url('index.php/Welcome/reservasi_silver');?> class="btn btn-buynow">
							<input type="hidden" name="jenis" value="silver" >
							<button type="submit" class="btn btn-danger">Reservasi sekarang</button>
							</form>
							
							
							
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-price price-three">
                            <div class="table-heading">
                                <p class="plan-name">Gold</p>
                                <p class="plan-price"><span class="dollar-sign">Rp</span><span class="price">650.000</span><span class="month">/ Pertunjukan</span></p>
                            </div>
                            <ul>
                                <li>Jumlah penari 9 - 10 Orang 
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Menampilkan 3 jenis tarian
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Jenis tarian dipilih pada halaman pengisian data Reservasi
                                    <span><i class="fa fa-check"></i></span> 
                                </li>
                            </ul>
                            <!--<form method="POST" action="reservasi" class="btn btn-buynow">
							<input type="hidden" name="jenis" value="gold" >
							<button>Reservasi sekarang</button>-->
							<form method="POST" action=<?php echo base_url('index.php/Welcome/reservasi_gold');?> class="btn btn-buynow">
							<input type="hidden" name="jenis" value="gold" >
							<button type="submit"class="btn btn-warning">Reservasi sekarang</button>
							</form>
							
							</form>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-price price-four">
                            <div class="table-heading">
                                <p class="plan-name">Platinum</p>
                                <p class="plan-price"><span class="dollar-sign">Rp</span><span class="price">1.300.000</span><span class="month">/ Pertunjukan</span></p>
                            </div>
                            <ul>
                                <li>Jumlah penari 10 - 15 Orang 
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Menampilkan 3 jenis tarian
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Jenis tarian dipilih pada halaman pengisian data Reservasi 
                                    <span><i class="fa fa-check"></i></span> 
                                </li>
                            </ul>
							<form method="POST" action=<?php echo base_url('index.php/Welcome/reservasi_platinum');?> class="btn btn-buynow">
							<input type="hidden" name="jenis" value="platinum" >
							<button type="submit" class="btn btn-success">Reservasi sekarang</button>
							</form>

                        </div>
                    </div>
                </div>
            </div>
        </section>    
    </body>
</html>
