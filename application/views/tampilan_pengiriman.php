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
  <center><h1>Halaman Validasi Email Terima</h1>
    <h3>Masukkan data dibawah ini</h3></center>
	<center>
	<form action="<?php echo base_url('index.php/emailprimasaja/prosespengiriman'); ?>" method="post">
  <table>
   <tbody>
	<?php foreach ($data as $u) { ?>
    <tr>
	 <br>
     <td>Ke</td>
     <td><input type="email" name="to" class="form-control" value="<?php echo $u['email'] ?>"></td>
    </tr>
    <tr>
     <td>Dari</td>
     <td><input type="email" name="from" value="qatqathrun.qn@gmail.com" class="form-control"></td>
    </tr>
    <tr>
     <td>Subject / judul</td>
	<td><input type="text" name="subject" value="[pemberitahuan reservasi]" class="form-control"></td>
    </tr>
    <tr>
     <td>Isi Pesan</td>
     <td><textarea name="isi" class="form-control">Selamat, reservasi anda kami terima. silahkan melakukan pembayaran selama 24jam setelah pemberitahuan ini masuk ke email anda</textarea></td>
    </tr>
   
     <td></td>
     <td><input type="submit" value="Kirim" class="btn btn-submit"></td>
    </tr>
	<?php } ?>
   </tbody>
  </table>
    </form>
	</center>
	 <script type="text/javascript" src="<?php echo base_url('gambar/js/jquery.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/lightbox.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/wow.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/main.js');?>"></script>     
	</body>

</html> 