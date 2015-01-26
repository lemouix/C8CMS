<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>
	
    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css('bootstrap'); ?>
    <!--external css-->
    <?php echo $this->Html->css('font-awesome'); ?>
    <?php echo $this->Html->css('zabuto_calendar'); ?>
    <?php echo $this->Html->css('jquery.gritter'); ?>
    <?php echo $this->Html->css('font-awesome'); ?>
    <?php echo $this->Html->css('lineicons_style'); ?>
    
    <!-- Custom styles for this template -->
    <?php echo $this->Html->css('style'); ?>
    <?php echo $this->Html->css('style-responsive'); ?>
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php echo $this->Html->css('jquery.fancybox'); ?>
    <?php echo $this->Html->css('jquery.gritter'); ?>
    <?php echo $this->Html->css('jquery.gritter0'); ?>
    <?php echo $this->Html->script('jquery'); ?>
    <?php echo $this->Html->script('jquery-1.8.3.min'); ?>
    <?php echo $this->Html->script('timeago'); ?>
    <?php echo $this->Html->script('global'); ?>
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <?php echo $this->fetch('content'); ?>

    <!-- js placed at the end of the document so the pages load faster -->
    
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <?php echo $this->Html->script('jquery.dcjqaccordion.2.7'); ?>
    <?php echo $this->Html->script('jquery.scrollTo.min'); ?>
    <?php echo $this->Html->script('jquery.nicescroll'); ?>
    <?php echo $this->Html->script('jquery.sparkline'); ?>

    <!--common script for all pages-->
    <?php echo $this->Html->script('common-scripts'); ?>
    
    <?php echo $this->Html->script('gritter/js/jquery.gritter'); ?>
    <?php echo $this->Html->script('gritter-conf'); ?>


    <!--script for this page-->
	<?php echo $this->Html->script('sparkline-chart'); ?>
	<?php echo $this->Html->script('zabuto_calendar'); ?>
    

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <?php echo $this->Html->script('jquery.backstretch.min'); ?>

    <script>
        $.backstretch("/proxy2me/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
