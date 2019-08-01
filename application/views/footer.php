<!DOCTYPE html>
<html>
<body>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center bottom-separator">
                        <img src="<?php echo base_url('gambar/images/home/under.png');?>" class="img-responsive inline" alt=""> 
                    </div>
                    <div class="col-md-4 col-sm-6">
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
                    <div class="col-md-3 col-sm-6">
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
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-form bottom">
                            <h2>Kirim Testimoni</h2>
							<form action="<?php echo base_url(). 'index.php/MyController/tambah_testimoni'; ?>" method="post"> 
                                <div class="form-group">
                                    <input type="text" name="nama_isi" class="form-control" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email_isi" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="testimoni_isi" id="message" class="form-control" rows="8" placeholder="Masukkan testimoni mu disini"></textarea>
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
		<script type="text/javascript" src="<?php echo base_url('gambar/js/jquery.isotope.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/lightbox.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/wow.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('gambar/js/main.js');?>"></script>   
		
 
</body>
</html>