<!doctype html>
<html lang="en">
	<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
		<link rel="icon" href="<?= base_url("images/favicon/$favicon->photo") ?>" type="image/png">
		<title><?= $title ?> - MyIPMSDA</title>
		<!-- Bootstrap CSS -->
		<link href="<?= base_url() ?>assets/front/css/bootstrap.css" rel="stylesheet">
		<link href="<?= base_url() ?>assets/front/vendors/linericon/style.css" rel="stylesheet">
		<link href="<?= base_url() ?>assets/front/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?= base_url() ?>assets/front/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="<?= base_url() ?>assets/front/vendors/lightbox/simpleLightbox.css" rel="stylesheet">
		<link href="<?= base_url() ?>assets/front/vendors/nice-select/css/nice-select.css" rel="stylesheet">
		<link href="<?= base_url() ?>assets/front/vendors/animate-css/animate.css" rel="stylesheet">
		<link href="<?= base_url() ?>assets/front/vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
		<link rel="stylesheet" href="<?= base_url('assets/front/css/bootstrap4/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/main_styles.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/blog.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/blog_responsive.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/responsive.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/bootstrap4/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/plugins/OwlCarousel2-2.2.1/owl.carousel.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/plugins/OwlCarousel2-2.2.1/animate.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/instructors.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/instructors_responsive.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/plugins/video-js/video-js.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/contact.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/contact_responsive.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/login.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/course.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/course_responsive.css')?>">
<link href="<?= base_url('assets/front/plugins/video-js/video-js.css')?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/instructors.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/css/instructors_responsive.css')?>">

		<!-- main css -->
		<link href="<?= base_url() ?>assets/front/css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
	</head>
	<body style="background-color: #EEEEEE;">
        
		<!--================ Navigation ================-->
		<?php $this->load->view('front/layouts/_navbar') ?>
		<!--================ End of Navigation ================-->
			
		<!--================ Content =================-->
		<?php $this->load->view('front/pages/' . $page) ?>
		<!--================ End Content =================-->
        
		<!--================ start footer Area  =================-->	
		<?php $this->load->view('front/layouts/_footer') ?>
		<!--================ End footer Area  =================-->
          
      <!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src=" <?= base_url() ?>assets/front/js/jquery-3.2.1.min.js"></script>
		<script src=" <?= base_url() ?>assets/front/js/popper.js"></script>
		<script src=" <?= base_url() ?>assets/front/js/bootstrap.min.js"></script>
		<script src=" <?= base_url() ?>assets/front/js/stellar.js"></script>
		<script src=" <?= base_url() ?>assets/front/vendors/lightbox/simpleLightbox.min.js"></script>
		<script src=" <?= base_url() ?>assets/front/vendors/nice-select/js/jquery.nice-select.min.js"></script>
		<script src=" <?= base_url() ?>assets/front/vendors/isotope/imagesloaded.pkgd.min.js"></script>
		<script src=" <?= base_url() ?>assets/front/vendors/isotope/isotope-min.js"></script>
		<script src=" <?= base_url() ?>assets/front/vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src=" <?= base_url() ?>assets/front/vendors/jquery-ui/jquery-ui.js"></script>
		<script src=" <?= base_url() ?>assets/front/js/jquery.ajaxchimp.min.js"></script>
		<script src=" <?= base_url() ?>assets/front/js/mail-script.js"></script>
		<script src=" <?= base_url() ?>assets/front/js/theme.js"></script>
   </body>
</html>