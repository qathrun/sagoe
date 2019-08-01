<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
         <title>email</title>
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
 <body>
  <center><h1>Halaman Validasi Email Tolak</h1>
    <h3>Masukkan data dibawah ini</h3></center>
	<center>
	<div class="col-md-12 col-sm-4">
	<form action="<?php echo base_url('index.php/emailtolak/tolak_email'); ?>" method="post">
	<table>
	<tbody>
	<?php foreach ($data as $u) { ?>
    <tr>
	 <td></td>
     <td>Ke</td>
     <td><input type="email" name="to" class="form-control" value="<?php echo $u['email'] ?>"></td>
    </tr>
    <tr>
	 <td></td>
     <td>Dari</td>
     <td><input type="email" name="from" value="qatqathrun.qn@gmail.com" class="form-control"></td>
    </tr>
    <tr>
	 <td></td>
     <td>Subject / judul</td>
	 <td><input type="text" name="subject" value="[pemberitahuan reservasi]" class="form-control"></td>
    </tr>
    <tr>
	 <td></td>
     <td>Isi Pesan</td>
     <td><textarea name="isi" class="form-control">Reservasi anda kami tolak dikarenakan terdapat jadwal yang bentrok. Atas perhatian nya kami ucapkan terima kasih</textarea></td>
    </tr>
   
     <td></td>
	 <td></td>
     <td><input type="submit" value="Kirim" class="btn btn-submit"></td>
    </tr>
	<br>
	<?php } ?>
   </tbody>
  </table>
    </form>
	</div>
	</center>
	 <script type="text/javascript" src="<?php echo base_url('gambar/js/jquery.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/lightbox.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/wow.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/main.js');?>"></script>      
	</body>
</html> 