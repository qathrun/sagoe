<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Pricing Table | SAGOE</title>
        <link href="<?php echo base_url('gambar/css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('gambar/css/font-awesome.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('gambar/css/animate.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('gambar/css/lightbox.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('gambar/css/main.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('gambar/css/responsive.css');?>" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->         
    <link rel="shortcut icon" href="<?php echo base_url('gambar/images/ico/favicon.ico');?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('gambar/images/ico/apple-touch-icon-144-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('gambar/images/ico/apple-touch-icon-114-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('gambar/images/ico/apple-touch-icon-72-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('gambar/images/ico/apple-touch-icon-57-precomposed.png');?>">
    </head>
    <!--/head-->
    <body>
        <header id="header"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 overflow">
                        <div class="social-icons pull-right">
                            <ul class="nav nav-pills">
                                <li>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </li>
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
                                    <li>
                                        <a href="<?php echo base_url('index.php/Welcome/contactus');?>">Kontak Kami</a>
                                    </li>                                  
                                </ul>
                            </li>                             
                            <li class="dropdown">
                               <a href="<?php echo base_url('index.php/Welcome/blog');?>">BERITA<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li>
                                        <a href="<?php echo base_url('index.php/Welcome/blog');?>">Berita</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo base_url('index.php/Welcome/portfolio');?>">PORTOFOLIO<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li>
                                        <a href="<?php echo base_url('index.php/Welcome/portfolio');?>" >Portofolio</a>
                                    </li>
                                </ul>
                            </li>                             
                            <li>
                                <a href="shortcodes.html">Shortcodes</a>
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
                                <h1 class="title">Reservasi</h1>
                                <p>Isilah data reservasi dibawah ini</p>
                            </div>                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#action-->
		<center>
		<div class="col-md-4 col-sm-12">
      <form action="<?php echo base_url(). 'index.php/MyController/tambah'; ?>" method="post">
		<table style="margin:20px auto;">
		
				<select name="jenis_paket" type="text" class="form-control">
				<option> Jenis Paket</option>
				<option value="Basic">Basic</option>
				</select><br>
				
				<input type="text" name="nama" placeholder="nama" class="form-control"><br>
				<input type="text" name="no_ktp" placeholder="no_ktp" class="form-control"><br>
				<input type="date" name="tanggal_tampil" placeholder="tanggal_tampil" class="form-control"><br>
				<input type="time" name="waktu_tampil" placeholder="waktu_tampil" class="form-control"><br>
				<input type="text" name="lokasi_tampil" placeholder="lokasi_tampil" class="form-control"><br>
				
				<select name="tari_1" type="text" class="form-control">
				<option>Jenis Tari 1</option>
				<option value="Saman">Saman</option>
				<option value="Ratoeh Duek">Ratoeh Duek</option>
				<option value="Ranup Lampuan">Ranup Lampuan</option>
				<option value="Tarek Pukat">Tarek Pukat</option>
				</select><br><br>
				<input type="hidden" value="" name="tari_2"></input>
				<input type="hidden" value="" name="tari_3"></input>
				
				<input type="text" name="email" placeholder="email" class="form-control"><br><br>
				<input type="text" name="keterangan" placeholder="keterangan" class="form-control"><br><br>
			<tr>
			<td>
			</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah" class="btn btn-primary" ></td>
			</tr>		
		</table>
	</form>	
	</div>
		</center>
      
                     <!--/#price-table2-->
                     </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center bottom-separator">
                         <img src="<?php echo base_url('gambar/images/home/under.png');?>" class="img-responsive inline" alt=""> 
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <div class="testimonial bottom">
                            <h2>Testimonial</h2>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <img src="<?php echo base_url('gambar/images/home/profile1.png');?>" alt=""> 
                                    </a>
                                </div>
                                <div class="media-body">
                                    <blockquote>Tim penari yang hebat</blockquote>
                                    <h3><a href="#">- ITS-EXPO -</a></h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <img src="<?php echo base_url('gambar/images/home/profile2.png');?>" alt=""> 
                                    </a>
                                </div>
                                <div class="media-body">
                                    <blockquote>Penari yang profesional dan handal</blockquote>
                                    <h3><a href="">- Dekan Cup Unair-</a></h3>
                                </div>
                            </div>                             
                        </div>                         
                    </div>
                    <div class="col-md-3 col-sm-3 col-md-offset-1">
                        <div class="contact-info bottom">
                            <h2>Contacts</h2>
                            <address>
                        E-mail: <a href="mailto:someone@example.com">sagoesurabaya@gmaill.com</a> <br> 
                        Phone : +628-52-09x-xxx<br> 
                        Fax   : +628-52-09x-xxx<br> </address>
                            <h2>Address</h2>
                            <address>Perum Sutorejo Utara Pintu 2 Jl. Sutorejo 1 gang sutorejo 7 no.18&nbsp;<br> 
                        Surabaya<br>Jawa Timur&nbsp;<br> </address>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-form bottom">
                            <h2>Kirim Testimoni</h2>
                            <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Masukkan testimoni mu disini"></textarea>
                                </div>                                
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-submit" value="Kirim">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="copyright-text text-center">
                            <p>&copy; SAGOE 2017. All Rights Reserved.</p>
                            <p>Supported by <a target="_blank" href="http://pmktr.org/">PMKTR</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->
        <script type="text/javascript" src="<?php echo base_url('gambar/js/jquery.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/lightbox.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/wow.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/main.js');?>"></script>       
    </body>
</html>
