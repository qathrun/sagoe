<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo base_url('gambar2/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/fullcalendar.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/matrix-style.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/matrix-media.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel='stylesheet' type='text/css'>
<style>
table{
	width: 90%;
}
#table-scroll {
  height:150px;
  overflow:auto;  
  
}
</style>
</head>
<body>

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-file"></i>Addons</a>
<br><br><br><br>
<ul>
	<li><a href="<?php echo base_url('index.php/MyController/read');?>" ><i class="icon icon-home"></i> <span>Database reservasi</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Reservasi Admin</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="<?php echo base_url('index.php/MyController/basic_admin');?>" >Basic</a></li>
        <li><a href="<?php echo base_url('index.php/MyController/silver_admin');?>" >Silver</a></li>
        <li><a href="<?php echo base_url('index.php/MyController/gold_admin');?>" >Gold</a></li>
		<li><a href="<?php echo base_url('index.php/MyController/platinum_admin');?>" >Platinum</a></li>
    </ul>
	</li>
    <li><a href="<?php echo base_url('index.php/MyController/view_pindai_terima');?>" ><i class="icon icon-signal"></i> <span>Database reservasi terima</span></a> </li>
    <li><a href="<?php echo base_url('index.php/MyController/view_pindai_tolak');?>" ><i class="icon icon-inbox"></i> <span>Database reservasi tolak</span></a> </li>
    <li><a href="<?php echo base_url('index.php/MyController/read_testimoni');?>" ><i class="icon icon-th"></i> <span>Testimoni</span></a></li>
	<li><a href="<?php echo base_url('index.php/MyController/kalender_admin');?>" ><i class="icon icon-th"></i> <span>Kalender</span></a></li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Upload</span> <span class="label label-important">2</span></a>
    <ul>
        <li><a href="<?php echo base_url('index.php/upload');?>" >Penampilan Terbaru</a></li>
		<li><a href="<?php echo base_url('index.php/MyController/read_upload');?>" >Database Penampilan Terbaru</a></li>
		
    </ul>
	</li>
	<li><a href="<?php echo base_url('index.php/MyController/logout');?>" ><i class="icon icon-fullscreen"></i> <span>Logout</span></a></li>
</ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 




<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Database Reservasi</h1>
  </div>
  <div class="container-fluid" style="height:90vh">
    <hr>
    <div class="row-fluid" style="height:90%">
      <div class="span12" style="height:100%">
       
   
        <div class="widget-box" style="height:100%">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Database Reservasi Admin</h5>
          </div>
          <div class="widget-content nopadding" style="height:90%">
		  <div id="table-scroll" style="height:100%">
            <table class="table table-bordered data-table" cellpadding="0" cellspacing="0" style="width: 100%; height:100%">
              <thead>
                <tr>
				<th>tgl_transaksi</th>
				<th>jenis_paket</th>
				<th>nama</th>
				<th>no_ktp</th>
				<th>tanggal_tampil</th>
				<th>waktu_tampil</th>
				<th>lokasi_tampil</th>
				<th>tari_1</th>
				<th>tari_2</th>
				<th>tari_3</th>
				<th>email</th>
				<th>keterangan</th>
				<th>Action</th>
				<th>Status</th>
				<th>do</th>
                </tr>
              </thead>
              <tbody>
                	<?php foreach($reservasi as $u){ ?>
					<tr><center>
			
			<td><?php echo $u->tgl_transaksi ?></td>
			<td><?php echo $u->jenis_paket ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->no_ktp ?></td>
			<td><?php echo $u->tanggal_tampil ?></td>
			<td><?php echo $u->waktu_tampil ?></td>
			<td><?php echo $u->lokasi_tampil ?></td>
			<td><?php echo $u->tari_1 ?></td>
			<td><?php echo $u->tari_2 ?></td>
			<td><?php echo $u->tari_3 ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->keterangan ?></td>
			<td>
                <?php echo anchor('MyController/hapus/'.$u->no_ktp,'Hapus'); ?>
				<?php echo anchor('MyController/edit/'.$u->no_ktp,'Edit'); ?>
			</td>
			<td>
				<?php echo anchor('MyController/terima/'.$u->no_ktp,'Terima'); ?>
				<?php echo anchor('MyController/tolak/'.$u->no_ktp,'Tolak'); ?>
			</td>
			<td>
                <?php echo anchor('MyController/pindai_terima/'.$u->no_ktp,'pindai_terima'); ?>
				<?php echo anchor('MyController/pindai_tolak/'.$u->no_ktp,'pindai_tolak'); ?>
			</td>
			
			</center>
		</tr>
		<?php } ?>
            </table>
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="copyright-text text-center">
                            <p>&copy; SAGOE 2017. All Rights Reserved.</p>
                            <p>Supported by <a target="_blank" href="http://pmktr.org/">PMKTR</a></p>
                        </div>
<!--end-Footer-part-->
<script  src="<?php echo base_url('gambar2/js/jquery.min.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/jquery.ui.custom.js');?>"></script>
<script src="<?php echo base_url('gambar2/js/matrix.calendar.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/matrix.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/fullcalendar.min.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/bootstrap.min.js');?>"></script>
</body>
</html>
