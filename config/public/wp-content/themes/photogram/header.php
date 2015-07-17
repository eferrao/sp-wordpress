<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  
  <title><?php colabs_title(); ?></title>
 
  <?php  
  global $site_title,$site_url;
  
  $site_title = get_bloginfo( 'name' );
  $site_url = home_url( '/' );
  $site_description = get_bloginfo( 'description' );
  ?>
  
  <?php if(get_option('colabs_disable_mobile')=='false'){?>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php }?>
  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<div class="main-wrapper">
<header class="header container">
  <div class="row">
    <div class="branding">
      <h1 class="logo">
	    <a href="<?php echo $site_url;?>">
			<?php
			if (get_option('colabs_logotitle')=='logo'){
				echo '<img src="' . get_option('colabs_logo') . '" alt="' . $site_title . '" />';
			}else {
				echo $site_title;
			} // End IF Statement
			?>
  		</a>
	  </h1>
    </div><!-- .branding -->
    
    <a href="#main-menu-slide" class="btn-navbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="nav-collapse">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'topnav', 'container' => 'nav', 'menu_class' => '', 'fallback_cb'=>'colabs_fallback_menu') );?><!-- .topnav -->
    </div>
    
  </div>
</header><!-- .header -->


<div class="main-container container">
  <div class="row">
	<?php 
		if(!is_front_page()){
			if(!is_page_template("template-gallery.php") && !is_page_template("template-photograph.php") && !is_tax("photograph-categories") && !is_post_type_archive("photograph")  ) 
				echo str_ireplace("breadcrumb breadcrumbs colabs-breadcrumbs","breadcrumb breadcrumbs colabs-breadcrumbs col8",colabs_breadcrumbs(array('before' => '', 'separator' =>'&raquo;', 'echo' => false)) ); 			
		}			
	?>