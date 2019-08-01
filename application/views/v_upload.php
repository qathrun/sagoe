<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>reservasi platinum admin</title>
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
	<style type="text/css">
	div{
		margin: 0px 100px 30px 450px;
		}
	</style>
</head>
<body>
	<center>
	<h2 class="page-header">Halaman Upload Penampilan Terbaru</h2></center>
	<div class="col-md-4 col-sm-12"> 
	<?php echo $error;?>

	<?php echo form_open_multipart('upload/aksi_upload');?>
	
	<input type="text" name="id_penampilan" placeholder="id_penampilan" class="form-control"><br>
	<input type="text" name="nama_penampilan" placeholder="nama_penampilan" class="form-control"><br>
	<input type="file" name="berkas" class="form-control"/>
	<br><br> 
	<input type="submit" value="upload" class="btn btn-info" />
	</div>

		<script type="text/javascript" src="<?php echo base_url('gambar/js/jquery.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/lightbox.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/wow.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/main.js');?>"></script>      
</body>
</html>