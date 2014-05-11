<?php 
/*
Template Name: Search Page
*/

get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 contingut">
				<h1><?php printf( __( 'Resultats de la cerca per: %s' ), '<span>' . get_search_query() . '</span>'); ?></h1>

				<p> <?php get_search_form(); ?> </p>
				<?php // Blog post query
				global $query_string;

				$query_args = explode("&", $query_string);
				$search_query = array();

				foreach($query_args as $key => $string) {
					$query_split = explode("=", $string);
					$search_query[$query_split[0]] = urldecode($query_split[1]);
				} // foreach
				$search = new WP_Query($search_query); 
				global $wp_query;
				$total_results = $wp_query->found_posts;
				?>


				<h3 class="text-muted">Hem trobat <? echo $total_results; ?> resultats.</h3>
				<br />
			    <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
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