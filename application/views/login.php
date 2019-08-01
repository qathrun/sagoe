<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		table{
		position: absolute;
		height: 100px;
		top: 50%;
		left: 50%;
		margin: -100px 0 0 -150px;
		}
	</style>
	 <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo base_url('gambar2/css/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('gambar2/css/bootstrap-responsive.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('gambar2/css/matrix-login.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('gambar2/font-awesome/css/font-awesome.css');?>">
		<link rel="stylesheet" type='text/css' href="<?php echo base_url('gambar/http://fonts.googleapis.com/css?family=Open+Sans:400,700,800');?>">
	</head>
	<body>
	<div id="loginbox">            
			<form id="loginform" class="form-vertical" method="post" action="<?php echo base_url().'index.php/MyController/login'?>">
				<div class="control-group normal_text"> <h3><img src="<?php echo base_url('gambar/images/logo.png');?>" alt="logo"></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="username" required="required" placeholder="username">
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="pass" required="required" placeholder="password">
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                <span class="pull-right"><input type="submit" value="LOGIN" class="btn btn-success"></span>
             
				
				</div>
				<div>
				<td colspan="2"><?php echo $err_message;?></td>
				</div>
            </form>
        </div>
		<script type="text/javascript" src="<?php echo base_url('gambar2/js/jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('gambar2/js/matrix.login.js');?>"></script>

	</body>
</html>