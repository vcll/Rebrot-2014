<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" class="search-field form-control" placeholder="Buscar" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" value="Buscar">Cerca!</button>
		</span>
	</div>
</form>