<?php get_header(); ?>
	<div class="container contingut">
		<div class="row">
			<div class="col-md-8">

				<?php // Blog post query
				query_posts( array( 'post_type' => 'post') );
			    if (have_posts()) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-md-4">
						<?php   if ( has_post_thumbnail() ) { the_post_thumbnail('carousel',array('class'=>'img-destacats'));} else { ?>
                    	<img alt="1000x600" src="<?php echo get_stylesheet_directory_uri(); ?>/tema/imatges/predefinides/no-poster-65x90.png" />
                		<?php } ?>
                	</div>
                	<div class="col-md-8">
                		<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><h3><?php the_title_attribute();?></h3></a>
			      		<?php my_excerpt(50);?>

                	</div>
				</div>
				<hr>
			    <?php endwhile; endif; ?>

		    </div>
			<div class="col-md-4 contingut">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>