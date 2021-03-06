<?php

	/**
	 * Popular Widget - Admin form
	 *
	 * @file form.php
	 * @package Popular Widget
	 * @author Hafid Trujillo
	 * @copyright 20010-2013
	 * @filesource  wp-content/plugins/popular-widget/_inc/form.php
	 * @since 1.6.0
	 */

	$this->tabs = ( empty( $instance['order'] ) ) 
	? $this->tabs : $instance['order'];
			
	extract( wp_parse_args( $instance, $this->defaults ) );
	$post_types = get_post_types( array( 'public' => true ), 'names', 'and' );
	
	?>
	
	<p>
		<label for="<?php $this->field_id( 'title') ?>"><?php _e( 'Title', 'pop-wid' ) ?> 
			<input class="widefat" id="<?php $this->field_id( 'title') ?>" name="<?php $this->field_name( 'title' ) ?>" type="text" value="<?php echo esc_attr( $title ) ?>" />
		</label>
	</p>
	
	<p>
		<label for="<?php $this->field_id( 'meta_key') ?>"><a href="http://codex.wordpress.org/Using_Custom_Fields#Advanced_Techniques_for_Custom_Fields"><?php _e( 'Custom Field','pop-wid' )?> </a>
			<input class="widefat" id="<?php $this->field_id( 'meta_key' )?>" name="<?php $this->field_name( 'meta_key' )?>"  type="text" value="<?php echo esc_attr( $meta_key ) ?>"/> <br /><small><?php _e( 'Custom field used to calculate views count.', 'pop-wid' )?> </small>
		</label>
	</p>
	
	<p>
		<label for="<?php $this->field_id( 'lastdays') ?>"><?php _e( 'In the last','pop-wid' )?> 
			<input  id="<?php $this->field_id( 'lastdays' )?>" name="<?php $this->field_name( 'lastdays' )?>" size="4" type="text" value="<?php echo esc_attr( $lastdays ) ?>"/> 
			<?php _e( 'days','pop-wid' )?>
		</label>
	</p>
	
	<h4 class="popw-collapse"><?php _e( 'Users:', 'pop-wid' )?><span></span></h4>
	<div class="popw-inner">
		<p>
			<label for="<?php $this->field_id( 'userid' )?>"><?php _e( 'Filter by user id', 'pop-wid' )?> 
				<input class="widefat" id="<?php $this->field_id( 'userids' )?>" name="<?php $this->field_name('userids')?>" type="text" value="<?php echo esc_attr( $userids ) ?>"/>
			</label><br /><small><?php _e( 'comma-separated user IDs', 'pop-wid' )?> </small>
		</p>
		 <p>
			<label for="<?php $this->field_id( 'exclude_users' )?>">
				<input id="<?php $this->field_id( 'exclude_users' )?>" name="<?php $this->field_name( 'exclude_users' ); ?>" type="checkbox" <?php checked( $exclude_users, 'on' ) ?> />
				<?php _e( 'Exclude',  'pop-wid' ) ?>
			</label><br /><small><?php _e( 'Exclude user using the list above.', 'pop-wid' )?> </small>
		</p>
	</div>     
	
	<h4 class="popw-collapse"><?php _e( 'Display:', 'pop-wid' )?><span></span></h4>
	<div class="popw-inner">
		<p>
			<label for="<?php $this->field_id( 'counter' )?>">
				<input id="<?php $this->field_id( 'counter' )?>" name="<?php $this->field_name('counter')?>" type="checkbox" <?php checked( 'on', $counter ) ?> /> 
				<?php _e( 'Display count', 'pop-wid' )?>
			</label><br />		
			
			<label for="<?php $this->field_id( 'thumb' )?>">
				<input id="<?php $this->field_id( 'thumb' )?>" name="<?php $this->field_name( 'thumb' )?>" type="checkbox" <?php checked( 'on', $thumb ) ?> /> 
				<?php _e( 'Display thumbnail', 'pop-wid' )?>
			</label><br />
			
			<label for="<?php $this->field_id('excerpt')?>">
				<input id="<?php $this->field_id('excerpt')?>" name="<?php $this->field_name('excerpt')?>" type="checkbox" <?php checked( 'on', $excerpt ) ?> /> 
				<?php _e( 'Display post excerpt', 'pop-wid' )?>
			</label>
		</p>
		<p>
			<label for="<?php $this->field_id( 'imgsize' )?>"><?php _e('Image Size','pop-wid')?>
			<select id="<?php $this->field_id( 'imgsize' ) ?>" name="<?php $this->field_name( 'imgsize' ) ?>">
			<?php foreach( get_intermediate_image_sizes() as $size ):?>
				<option value="<?php echo $size?>" <?php selected( $size, $imgsize )?>><?php echo $size ?></option>
			<?php endforeach;?>
			</select>
			</label>
		</p>
		<p>
			<label for="<?php $this->field_id( 'limit' )?>"><?php _e( 'Show how many posts?', 'pop-wid' )?> 
				<input id="<?php $this->field_id( 'limit' )?>" name="<?php $this->field_name('limit')?>" size="5" type="text" value="<?php echo esc_attr( $limit ) ?>"/>
			</label>
		</p>
		<p>
			<label for="<?php $this->field_id( 'tlength' )?>"><?php _e( 'Title length', 'pop-wid' )?> 
				<input id="<?php $this->field_id( 'tlength' )?>" name="<?php $this->field_name( 'tlength' )?>" size="4" type="text" value="<?php echo esc_attr( $tlength ) ?>"/> 
				<?php _e( 'characters', 'pop-wid' )?>
			</label>
		</p>
		<p>
			<label for="<?php $this->field_id( 'excerptlength' )?>"><?php _e( 'Excerpt length', 'pop-wid' )?> 
				<input id="<?php $this->field_id( 'excerptlength' )?>" name="<?php $this->field_name('excerptlength')?>" size="5" type="text" 
				value="<?php echo esc_attr( $excerptlength ) ?>"/> <?php _e( 'Words', 'pop-wid' ) ?>
			</label>
		</p>
	</div>
	
	<h4 class="popw-collapse"><?php _e( 'Calculate:', 'pop-wid' )?><span></span></h4>
	<div class="popw-inner">
		<p>
			<label for="<?php $this->field_id( 'calculate-views' )?>">
				<input id="<?php $this->field_id( 'calculate-views' )?>" name="<?php $this->field_name( 'calculate' )?>" value="views" type="radio" <?php checked( $calculate, 'views' ) ?> /> 
				<abbr title="Every time the user views the page"><?php _e( 'Views', 'pop-wid' )?></abbr>
			</label> <br /><small><?php _e( 'Every time user views the post.', 'pop-wid' ) ?></small><br />
			
			<label for="<?php $this->field_id( 'calculate-visits' )?>">
				<input id="<?php $this->field_id( 'calculate-visits' )?>" name="<?php $this->field_name('calculate')?>" value="visits" type="radio" <?php checked( $calculate, 'visits' ) ?> />
				<abbr title="Every time the user visits the site"><?php _e( 'Visits', 'pop-wid' )?></abbr>
			</label><br /><small><?php _e( 'Calculate only once per visit.', 'pop-wid' ) ?></small>
		</p>
	</div>
	
	
	<h4 class="popw-collapse"><?php _e( 'Taxonomy:','pop-wid' )?><span></span></h4>
	<div class="popw-inner">
		
		<p>
			<label for="<?php $this->field_id( 'cats' )?>"><?php _e( 'In Categories', 'pop-wid' )?> 
				<input  class="widefat" id="<?php $this->field_id( 'cats' )?>" name="<?php $this->field_name( 'cats' )?>" size="20" type="text" value="<?php echo esc_attr( $cats ) ?>"/>
			</label><br /><small><?php _e( 'comma-separated category IDs', 'pop-wid' )?> </small>
		</p>
		
		<p>
			<label for="<?php $this->field_id( 'exclude_cats' )?>">
				<input id="<?php $this->field_id( 'exclude_cats' )?>" name="<?php $this->field_name( 'exclude_cats' ); ?>" type="checkbox" <?php checked( $exclude_cats, 'on' ) ?> />
				<?php _e( 'Exclude',  'pop-wid' ) ?>
			</label><br /><small><?php _e( 'Exclude categories from above.', 'pop-wid' )?> </small>
		</p>
		
		<p><label for="<?php  $this->field_id( 'taxonomy' )?>"><?php _e( 'Tags taxonomy', 'pop-wid' )?>
		<select id="<?php $this->field_id( 'taxonomy' ); ?>" name="<?php $this->field_name(  'taxonomy' ); ?>">
			<?php foreach( get_taxonomies( array('public'=>true), 'names') as $tax => $taxname ):?>
				<option value="<?php echo $tax?>" <?php selected( $tax, $taxonomy )?>><?php echo $taxname ?></option>
			<?php endforeach;?>
		</select></label>
		</p>
	</div>
	
	
	<h4 class="popw-collapse"><?php _e( 'Post Types:','pop-wid' )?><span></span></h4>
	<div class="popw-inner">
		<p>
			<?php foreach ( $post_types  as $post_type ) { ?>
			<label for="<?php $this->field_id( $post_type )?>">
				<input id="<?php $this->field_id( $post_type )?>" name="<?php $this->field_name( 'posttypes' ); echo "[$post_type]" ?>" type="checkbox" 
				<?php checked( false, empty( $posttypes[$post_type] )  ) ?> /> 
				<?php echo $post_type ?></label><br />
			<?php } ?>
		</p>
	</div>
	
	<h4 class="popw-collapse"><?php _e( 'Arrange / Disable / Rename:','pop-wid' )?><span></span></h4>
	<div class="popw-inner popw-sortable">
		<p><small><?php _e( 'Click on the header to change the tab label. Check box to disable the tab.', 'pop-wid' )?> </small></p>
		<div>
			<?php foreach( $this->tabs as $tab => $label ) { ?>
			<div class="sort-tabs">
				<label for="<?php $this->field_id( "no{$tab}" )?>"<?php echo (( ${"no{$tab}"} == 'on' ) ? ' class="disabled"' : '' )?>>
					<a href="<?php echo "#$tab" ?>" class="rename" title="<?php _e( 'Rename tab', 'pop-wid' ) ?>"><?php echo $label ?></a>
					<input id="<?php $this->field_id( "no{$tab}" )?>" name="<?php echo $this->field_name( "no{$tab}" )?>" type="checkbox"  <?php checked( ${"no{$tab}"}, 'on' ) ?> /> 
				</label>
				<span class="rename-<?php echo "$tab" ?>">
					<input name="<?php $this->field_name( 'order' ); echo "[$tab]" ?>" type="text" value="<?php echo esc_attr( $label ) ?>" class="widefat" />
				</span>
			</div>
			<?php } ?>
		</div>
	</div>
	
	<?php do_action( 'pop_admin_form' ) ?>
	
	<p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YM9GXCFBND89E"><?php _e( 'Donate', 'pop-wid' )?></a> </p>