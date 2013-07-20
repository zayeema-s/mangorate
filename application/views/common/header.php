<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">  
    <meta http-equiv="content-type" content="text/html">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Open Mic @ Kozmo, Pandu & Jibon, event, events">  
    <meta name="description" content="">
    <meta name="author" content="Mangorate">

    <meta property='og:title' content='Open Mic @ Kozmo' />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://eventconnectbd.com/events/view/397" />
    <meta property="og:image" content="http://eventconnectbd.com/docs/photo/uploads/f241971f6844e1c6b4fde452e202cf09.jpg" />
    <meta property="og:site_name" content="EventConnectBD" />
    <meta property="og:description" content="Management and Pandu reserves the right to refuse any performance." />
    <meta property="fb:admins" content="1521982625,500943320,172009206,503513862,506419912" />
    <meta property="fb:app_id" content="448897628488531" />

    <title><?php echo $title; ?></title>

    <link rel="icon" type="image/png" href="<?php echo $this->config->item('img_url'); ?>favicon.png">

    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

    <link href="<?php echo $this->config->item('css_url'); ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('css_url'); ?>bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $this->config->item('css_url'); ?>font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo $this->config->item('css_url'); ?>font-awesome-ie7.min.css">
    <![endif]-->
    <link href="<?php echo $this->config->item('css_url'); ?>docs.css" rel="stylesheet">
    <?php echo $css; ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo $this->config->item('js_url'); ?>bootstrap.min.js"></script>
    <script src="<?php echo $this->config->item('js_url'); ?>jqBootstrapValidation.js"></script>
    <?php echo $js; ?>

    <script type="text/javascript">    
      $(document).ready(function(){
          $(window).scroll(function(){
              var top = $(document).scrollTop();
              if(top > 0)
              {
                $('.top-nav-area').addClass('transparent');
              }
              else
              {
                $('.top-nav-area').removeClass('transparent');
              }
          });

          $( '#carousel' ).elastislide(); 

          $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();

          $('.modal')
          .on('shown', function () {
            $('body').on('wheel.modal mousewheel.modal', function () {
              return false;
            });
          })
          .on('hidden', function () {
            $('body').off('wheel.modal mousewheel.modal');
          });
      }); 
    </script>

  </head>

  <body>

    <div class="top-area"></div> 
         
    <div class="top-nav-area navbar-fixed-top">
      <div class="container">
        <div class="span1"><img class="logo" src="assets/img/mangorate-logo.png"></div>
        <div class="span7">
          <form class="form-inline">
            <div class="input-prepend">
              <span class="add-on">Find</span>
              <input class="input-xlarge" id="prependedInput" type="text" placeholder="biriyani, dinner, Coffee World">
            </div>
            <div class="input-prepend">
              <span class="add-on">Near</span>
              <input class="input-xlarge" id="prependedInput" type="text" placeholder="Dhanmondi, Dhaka">
            </div>
            <button class="btn btn-search btn-inverse" type="submit"><i class="icon-search icon-light icon-large"></i></button>
          </form> 
        </div> 
        <div class="span2">          
          <a href="<?php echo base_url(); ?>auth/register" role="button" class="btn btn-signup btn-inverse" data-toggle="modal" data-target="#signup"><?php echo $this->lang->line('auth_signup'); ?></a>
          <a href="<?php echo base_url(); ?>auth/login" role="button" class="btn btn-login btn-inverse" data-toggle="modal" data-target="#login"><?php echo $this->lang->line('auth_login'); ?></a>
        </div>    
      </div>
      <div class="clear"></div>
    </div>
    
    <div class="container">
      <div class="navbar">
        <div class="navbar-inner">
          <a class="brand" href="#"><img class="text-logo" src="assets/img/mangorate-text.png"></a>
          <ul class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Write a Review</a></li>
            <li><a href="#">Find Friends</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Events</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <a href=""><img src="<?php echo $this->config->item('img_url'); ?>mangorate-text.png" /></a>
        </div>
      <div class="modal-body">
        <?php echo $this->config->item('loading_img'); ?>
      </div>
      <div class="modal-footer">
        By logging in you agree to Mangorate’s <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>. 
      </div>
    </div>

    <div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <a href=""><img src="<?php echo $this->config->item('img_url'); ?>mangorate-text.png" /></a>
        </div>
      <div class="modal-body">
        <?php echo $this->config->item('loading_img'); ?>
      </div>
      <div class="modal-footer">
        By clicking sign up, you agree to Mangorate's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>. 
      </div>
    </div> 

    <div id="forgot_pass" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <a href=""><img src="<?php echo $this->config->item('img_url'); ?>mangorate-text.png" /></a>
        </div>
      <div class="modal-body">
        <?php echo $this->config->item('loading_img'); ?>
      </div>
      <div class="modal-footer">
        An email with instructions for creating a new password will be sent to you.
      </div>
    </div> 