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

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Calendar</a></div>
    <h1>Calendar</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box widget-calendar">
          <div class="widget-title"> <span class="icon"><i class="icon-calendar"></i></span>
            <h5>Calendar</h5>
            <div class="buttons"> <a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Add new event</a>
              <div class="modal hide" id="modal-add-event">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3>Add a new event</h3>
                </div>
                <div class="modal-body">
                  <p>Enter event name:</p>
                  <p>
                    <input id="event-name" type="text" />
                  </p>
                </div>
                <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Cancel</a> <a href="#" id="add-event-submit" class="btn btn-primary">Add event</a> </div>
              </div>
            </div>
          </div>
          <div class="widget-content">
            <div class="panel-left">
              <div id="fullcalendar"></div>
            </div>
            <div id="external-events" class="panel-right">
              <div class="panel-title">
                <h5>Drag Events to the calander</h5>
              </div>
              <div class="panel-content">
                <div class="external-event ui-draggable label label-inverse">My Event 1</div>
                <div class="external-event ui-draggable label label-inverse">My Event 2</div>
                <div class="external-event ui-draggable label label-inverse">My Event 3</div>
                <div class="external-event ui-draggable label label-inverse">My Event 4</div>
                <div class="external-event ui-draggable label label-inverse">My Event 5</div>
              </div>
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
