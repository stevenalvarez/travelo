<?php
/**
 * Displays the searchform of the theme.
 */
?>
	<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searchform clearfix" method="get">
		<label class="assistive-text" for="s"><?php _e( 'Search', 'travelify' ); ?></label>
		<input type="text" placeholder="<?php esc_attr_e( 'nombre del post o categoria', 'travelify' ); ?>" class="s field" name="s"/>
        <button class="left search">Search</button>
	</form>