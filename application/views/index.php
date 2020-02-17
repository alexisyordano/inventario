<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ingresar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url() . RECURSOS ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url() . RECURSOS ?>/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?= base_url() . RECURSOS ?>/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> -->
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?= base_url() . RECURSOS ?>/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?= base_url() . RECURSOS ?>/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url() . RECURSOS ?>/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url() . RECURSOS ?>/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Inventario</span><strong class="text-primary">Dashboard</strong></div>
            
            <div id="app">

                <div class="alert alert-danger text-center" v-if="errorMessage">
                  <button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
                  <span class="glyphicon glyphicon-alert"></span> {{ errorMessage }}
                </div>

                <div class="alert alert-success text-center" v-if="successMessage">
                  <button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
                  <span class="glyphicon glyphicon-check"></span> {{ successMessage }}
                </div>
                
                <div class="form-group-material">
                <label for="login-username" class="label-material">Usuario</label>
                <input  type="text"  required data-msg="ingresa tu usuario" v-model="logDetails.usuario" v-on:keyup="keymonitor" class="input-material">
                </div>
                <div class="form-group-material">
                <label for="login-password" class="label-material">Clave</label>
                <input  type="password"  required data-msg="ingresa tu clave" v-model="logDetails.clave" v-on:keyup="keymonitor" class="input-material">
                </div>
                <div class="form-group text-center">
                <button v-on:click="enviar" class="btn btn-primary">Ingresar</button>


                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                </div>    
           </div>
            <!-- <a href="#" class="forgot-pass">Forgot Password?</a><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a> -->
          </div>
          <div class="copyrights text-center">
            <p>Developers</p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script type="text/javascript"src="<?php echo base_url();?>/Vue/vue.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Vue/axios.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Vue/app.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url() . RECURSOS ?>/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="<?= base_url() . RECURSOS ?>/js/front.js"></script>
  </body>
</html>