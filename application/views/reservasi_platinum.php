<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Reservasi Paket Platinum | SAGOE</title>
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
                            <li><a href="<?php echo base_url('index.php/Welcome/home');?>"> Home</a></li>
                            <li class="dropdown active">
                                <a href="#">RESERVASI<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="<?php echo base_url('index.php/Welcome/aboutus');?>">Tentang Kami</a> </li>
                                    <li><a href="<?php echo base_url('index.php/Welcome/service');?>">Layanan</a></li>
                                    <li><a class="active" href="<?php echo base_url('index.php/Welcome/pricing');?>"> Harga</a></li>                                                             
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
				<option> Jenis Paket</option class="form-control">
				<option value="Platinum">Platinum</option>
				</select>
				<input type="hidden" type="date" name="tgl_transaksi" placeholder="tgl_transaksi" class="form-control"><br> 
				<input type="text" name="nama" placeholder="nama" class="form-control"><br>
				<input type="number_format" name="no_ktp" placeholder="no_ktp" class="form-control"><br>
				<input type="date" name="tanggal_tampil" placeholder="tanggal_tampil" class="form-control"><br>
				<input type="time" name="waktu_tampil" placeholder="waktu_tampil" class="form-control"><br>
				<input type="text" name="lokasi_tampil" placeholder="lokasi_tampil" class="form-control"><br>

				<select name="tari_1" type="text" class="form-control">
				<option>Jenis Tari 1</option>
				<option value="Saman">Saman</option>
				<option value="Ratoeh Duek">Ratoeh Duek</option>
				<option value="Ranup Lampuan">Ranup Lampuan</option>
				<option value="Tarek Pukat">Tarek Pukat</option>
				</select><br>
				
				<select name="tari_2" type="text" class="form-control">
				<option>Jenis Tari 2</option>
				<option value="Saman">Saman</option>
				<option value="Ratoeh Duek">Ratoeh Duek</option>
				<option value="Ranup Lampuan">Ranup Lampuan</option>
				<option value="Tarek Pukat">Tarek Pukat</option>
				</select><br>
				
				<select name="tari_3" type="text" class="form-control">
				<option>Jenis Tari 3</option>
				<option value="Saman">Saman</option>
				<option value="Ratoeh Duek">Ratoeh Duek</option>
				<option value="Ranup Lampuan">Ranup Lampuan</option>
				<option value="Tarek Pukat">Tarek Pukat</option>
				</select><br>

				<input type="text" name="email" placeholder="email" class="form-control"><br>
				<input type="text" name="keterangan" placeholder="keterangan" class="form-control"><br>
			<tr>
			<td></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah" class="btn btn-primary"></td>
			</tr>
		</table>
	</form>	
	</div>
	</center>
    </body>
</html>
