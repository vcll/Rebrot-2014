<?php get_header(); ?>
	<div class="container contingut">
		<div class="row">
			<div class="col-md-8">
				<article>
					<h1>Error 404! No hem trobat el que buscaves</h1>
					<p><small class="text-muted"><span class="glyphicon glyphicon-time"></span> Publicat el 1867</small></p>
					<p> No hem trobat pas el que estaves buscant. Potser fent una altra cerca ho trobaràs.</p>
					<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="input-group" >
							<input type="text" class="search-field form-control" placeholder="Busca al web" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-default" value="submit "><i class="glyphicon glyphicon-search"></i></button>
							</span>
						</div>
					</form>
		    	</article>
		    </div>
			<div class="col-md-4 contingut">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>