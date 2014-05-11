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
				    query_posts( array( 'post_type' => 'post', 'showposts'=>4) );
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
			      		<?php my_excerpt(50);?>
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
		<div class="row">
			<?php // Blog post query
				    query_posts( array( 'post_type' => 'post', 'showposts'=>8) );
				    $i = 1;
				    if (have_posts()) : while ( have_posts() ) : the_post(); if($i >=5) { 
				    if (i==5){ }else{echo '<hr class="featurette-divider">';}?>

      <div class="row featurette">
        <div class="col-md-7">
          <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><h1 class="featurette-heading disabled"><?php the_title_attribute();?><span class="text-muted"> It'll blow your mind.</span></h1></a>
          <div class="lead"><?php my_excerpt(100);?></div>
        </div>
        <div class="col-md-5">
          <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portada','featurette-image img-responsive');?></a>
        </div>
      </div>

			     <?php } ?><?php  $i=$i+1; endwhile; endif; ?>



		</div><!-- row -->
	</div><!-- container -->




<?php get_footer(); ?>