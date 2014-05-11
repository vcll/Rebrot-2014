<?php
/**
 * Template Name: Carousel Inicial
 * The template used for displaying page content in page.php
 *
 * @author VCLL | https://vcll.info
 * @package VCLL
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;
  wp_title( '|', true, 'right' );bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );if ( $site_description && ( is_home() || is_front_page() ) )echo " | $site_description"; ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/ico/ico.png">
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.php" rel="stylesheet" type="text/css" >
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<? if(is_home()){?>
<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{202993516443772}',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=202993516443772&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

<? } ?>


<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header container" role="banner">
	   	<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="container">
	      <div class="row">
	      	<div class="col-md-12">
		      <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/inc/logo.png" class="logo" alt="Rebrot"></a>
		      </div>
		   
		      <!-- Collect the nav links, forms, and other content for toggling -->
		      <div class="collapse navbar-collapse">
		       	<?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
		       	<ul  class="nav navbar-nav navbar-right">
		       		<li class="dropdown">
		       			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Comparteix <i class="glyphicon glyphicon-share"></i></a>
		       			<ul class="dropdown-menu">
							<?php $obj= new shareCount($_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]); ?>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($_SERVER["HTTP_HOST"] .$_SERVER["REQUEST_URI"]); ?>" target="_blank"><span class="badge pull-right"><?php //echo $obj->get_fb();?></span> Facebook</a></li>
								<li><a href="https://twitter.com/intent/tweet?text=<?php the_title();?> <?php echo urlencode($_SERVER["HTTP_HOST"] .$_SERVER["REQUEST_URI"]); ?> Via @arran_jovent" target="_blank"><span class="badge pull-right"><?php //echo $obj->get_tweets(); ?></span> Twitter</a></li>

						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Buscar <i class="glyphicon glyphicon-search"></i></a>
						<ul class="dropdown-menu">
							<li style="padding: 15px; padding-bottom: 0px;"><form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="input-group" >
									<input type="text" class="search-field form-control" placeholder="Busca al web" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default" value="submit "><i class="glyphicon glyphicon-search"></i></button>
									</span>
								</div>
								</form>
							</li>
						</ul>
					</li>
		       		
		       	</ul>
		      </div><!-- /.navbar-collapse -->
		     </div>
		  </div>
		</div>
	    </nav>


		<?php $options = get_option('opcions_rebrot'); if ($options['twitter']==1){ ?>
			<a href="<?php echo $options['twitter_link'];?>" target="_blank" title="Twitter"><div class="twitter"></div></a>
		<?php } if ($options['facebook']==1){ ?>
			<a href="<?php echo $options['facebook_link']; ?>" target="_blank" title="Facebook"><div class="facebook"></div></a>
		<?php } if ($options['rss']==1){ ?>
			<a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="Feed RSS"><div class="rss"></div></a>
		<?php } if ($options['calendari']==1){ ?>
			<a href="<?php echo $options['calendari_link']; ?>" title="Calendari d'esdeveniments"><div class="calendari"></div></a>
		<?php } ?>
			<a href="http://arran.cat" title="Arran"><div class="arran"></div></a>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">