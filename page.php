<?php get_header(); ?>
	<div class="container contingut">
		<div class="row">
			<div class="col-md-8">
				<article>
					<?php while ( have_posts() ) : the_post(); ?>
					<?php   if ( has_post_thumbnail()){ $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
					echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
              		the_post_thumbnail('carousel', array('class'=>'img-pagina'));
              		echo '</a>';  } ?>
					<h1><?php the_title();?></h1>
					<p><small class="text-muted"><span class="glyphicon glyphicon-time"></span> Publicat el <?php the_time('j \d\e\ F \d\e\ Y'); ?></small></p>
					<?php the_content(); ?>
					<?php if ( is_user_logged_in() ) {?>
				        <a href="<?php print get_edit_post_link();?>"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edita </button></a>
					<?php } endwhile;?>
		    	</article>
		    </div>
			<div class="col-md-4 contingut">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>