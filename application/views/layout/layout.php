
<!-- -------------------head_start---------------------- -->
 <?php $this->load->view('layout/header_link.php');?>
<!-- ------------------------head_end---------------------->
 <body>
<!-- ---------------- Loader_start-------------------------->
 <?php $this->load->view('layout/loader.php')?>
<!-- -----------------Loader_end--------------------------->

<!------------------------Start IT-Tech Header Area------------ -->
<?php $this->load->view('layout/header.php')?>
<!------------------------End IT-Tech Header Area------------ -->
<?php $this->load->view($view); ?>
<!---------------------------start-footer-area----------------------- -->
<?php $this->load->view('layout/footer.php')?>
<!---------------------------End-footer-area------------------------->

<!---------------------------start-scrollup-area------------------------->
<?php $this->load->view('layout/scrollup.php')?>
<!---------------------------End-scrollup-area------------------------->
<!---------------------------start-scrollup-area------------------------->
<?php $this->load->view('layout/footer-script.php')?>
<!---------------------------End-scrollup-area----------------------- -->

