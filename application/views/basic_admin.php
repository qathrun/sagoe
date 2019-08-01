<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>

<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo base_url('gambar2/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/colorpicker.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/datepicker.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/uniform.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/select2.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/matrix-style.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/matrix-media.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/bootstrap-wysihtml5.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel='stylesheet' type='text/css'>
</head>
<body>

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
<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Halaman Reservasi Admin Paket Basic</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Paket Basic</h5>
        </div>
        <div class="widget-content nopadding">
		
		<form action="<?php echo base_url(). 'index.php/MyController/tambah_admin'; ?>" method="post" class="form-horizontal"> 
             <div class="control-group">
              <label class="control-label"></label>
				<div class="controls">
                <input type="hidden" class="span11" name="jenis_paket" value="Basic" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"></label>
				<div class="controls">
                <input type="hidden" class="span11" name="tari_2" value="" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"></label>
				<div class="controls">
                <input type="hidden" class="span11" name="tari_3" value="" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <input type="text" class="span11" name="nama" placeholder="nama" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">No KTP</label>
              <div class="controls">
                <input type="text"  class="span11" name="no_ktp" placeholder="no_ktp"  />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Tanggal Tampil</label>
              <div class="controls">
                <input type="date"  class="span11" name="tanggal_tampil" placeholder="tanggal_tampil"  />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Waktu Tampil</label>
              <div class="controls">
                <input type="time"  class="span11" name="waktu_tampil" placeholder="waktu_tampil"  />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Lokasi Tampil</label>
              <div class="controls">
                <input type="text"  class="span11" name="lokasi_tampil" placeholder="lokasi_tampil"  />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Jenis Tari 1</label>
              <div class="controls">
                <select name="tari_1">
				   <option value="Saman">Saman</option>                             
                   <option value="Ratoeh Duek">Ratoeh Duek</option>                             
                   <option value="Ranup Lampuan">Ranup Lampuan</option>                             
                   <option value="Tarek Pukat">Tarek Pukat</option>    
                </select>
            </div>
            </div>
			<div class="control-group">
              <label class="control-label">Email</label>
              <div class="controls">
                <input type="text"  class="span11" name="email" placeholder="email"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Keterangan</label>
              <div class="controls">
                <textarea class="span11" name="keterangan" ></textarea>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div></div>
<!--Footer-part-->
 <div class="copyright-text text-center">
        <p>&copy; SAGOE 2017. All Rights Reserved.</p>
        <p>Supported by <a target="_blank" href="http://pmktr.org/">PMKTR</a></p>
</div>
<!--end-Footer-part--> 
<script  src="<?php echo base_url('gambar2/js/jquery.min.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/jquery.ui.custom.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/bootstrap.min.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/bootstrap-colorpicker.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/bootstrap-datepicker.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/jquery.toggle.buttons.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/masked.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/jquery.uniform.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/select2.min.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js//matrix.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/matrix.form_common.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/wysihtml5-0.3.0.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/jquery.peity.min.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/bootstrap-wysihtml5.js');?>"></script>

<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
