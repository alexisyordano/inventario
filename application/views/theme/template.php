<!DOCTYPE html>
<html lang="es">
    <head>
         
		<?php $this->load->view(THEME . 'left_menu') ?>
		<div class="page">
			<?php $this->load->view(THEME . 'head') ?>
			<?php $this->load->view(THEME . 'header') ?>
			<?php $this->load->view($contenido) ?>
			<?php $this->load->view(THEME . 'footer') ?>
		</div>
   
    <script src="<?= base_url() . RECURSOS ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="<?= base_url() . RECURSOS ?>/js/front.js"></script>  
    
    
    

   