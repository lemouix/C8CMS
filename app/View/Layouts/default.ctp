<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>C8 CMS - Administration</title>
	
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
	<script>var SITE_URL = "<?php echo FULL_BASE_URL; ?>/proxy2me/";</script>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>C8 CMS admin</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'),array('class' => 'logout')); ?></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  
                  <li class="mt">
		      <?php echo $this->Html->link($this->Html->tag('i','',array('class' => 'fa fa-dashboard')).'Informations générales',array('controller' => 'globalConfigurations','action' => 'edit'),array('escape' => false)); ?>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Pages du site</span>
                      </a>
		      <ul class="sub">
                          <li><?php echo $this->Html->link('Ajouter une page',array('controller' => 'WebsitePages', 'action' => 'add')); ?></li>
                      </ul>
                      <ul class="sub">
                          <li><?php echo $this->Html->link('Liste des pages',array('controller' => 'WebsitePages', 'action' => 'index')); ?></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		<?php echo $this->fetch('content'); ?>
	</section>
      </section>

   

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
    

  </body>
</html>
