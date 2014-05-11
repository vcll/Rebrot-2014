<?php
/**
 * Template Name: Carousel Inicial
 * The template used for displaying page content in page.php
 *
 * @author VCLL | https://vcll.info
 * @package VCLL
 */
get_header(); ?>
	<div class="container-carousel">
		<div id="carousel-portada" class="carousel slide" data-ride="carousel" data-pause="hover">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-portada" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-portada" data-slide-to="1"></li>
			    <li data-target="#carousel-portada" data-slide-to="2"></li>
			    <li data-target="#carousel-portada" data-slide-to="3"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			  	<?php // Blog post query
				    query_posts( array( 'post_type' => 'post','category_name' => 'destacada' , 'showposts'=>4) );
				    $i = 0;
				    if (have_posts()) : while ( have_posts() ) : the_post(); ?>
			    <div class="item <?php if($i==0) echo 'active'; ?> ">
			    	<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
                	<?php   if ( has_post_thumbnail() ) { the_post_thumbnail('carousel');} else { ?>
                    <img alt="1000x600" src="<?php echo get_stylesheet_directory_uri(); ?>/tema/imatges/predefinides/no-poster-65x90.png" />
                	<?php } ?>
                	</a> 
			     	<div class="carousel-caption">
			      		<h3><?php the_title_attribute();?></h3>
			      		<div class="hidden-xs"><?php my_excerpt(50);?></div>
			      	</div>
			    </div>
			    <?php $i=1; endwhile; endif; ?>

			  </div>
				

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-portada" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-portada" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
		</div> <!-- .carousel -->
	</div><!-- .container -->
	
	<div class="ombra"></div>


<div class="container">
	<div class="row media">
		<div class="col-md-8 tv">
			<iframe  class="rebrottv" width="750" height="422" src="//www.youtube-nocookie.com/embed/videoseries?list=PLHdv7awi1A9GmMZrVdcnvwUuzzKm0qkC7&?rel=0&?showinfo=0" frameborder="0" allowfullscreen ></iframe>
		</div>
		<div class="col-md-4">
			<a class="twitter-timeline twitterwidget " href="https://twitter.com/search?q=%23rebrot14" data-widget-id="444193813989322755">Tuits sobre "#rebrot14"</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs","twitterwidget");</script>
		</div>
	</div>

	<div class="row destacats">
		<?php // Blog post query
		query_posts( array( 'post_type' => 'post','cat'=>1, 'showposts'=>3) );
		$i = 1;
		if (have_posts()) : while ( have_posts() ) : the_post(); 
		?>
		<div class="col-md-3">
    		<div>
				<? the_post_thumbnail('destacats', array('class'=>'img-destacats'));?>
				<h4><?php the_title_attribute();?></h4>
				<?php my_excerpt(30);?>
				<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="btn btn-default" title="Enllaç">Continua llegint »</a>
			</div>
		</div>
		<?php  endwhile; endif; ?>

		<div class="col-md-3 fb-box">
			<div class="fb-like-box" data-href="https://www.facebook.com/Aplecrebrot" data-width="240" data-height="425" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>