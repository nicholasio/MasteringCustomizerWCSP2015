<?php get_header(); ?>

<div class="jumbotron">
	<h1>
		<?php echo esc_html( get_theme_mod( 'wordcamp_sp_headline' ) ); ?>
	</h1>
	<p class="lead">
		<?php echo esc_html( get_theme_mod( 'wordcamp_sp_heading_text' ) ); ?>
	</p>
	<p>
		<a class="btn btn-lg btn-success" href="#" role="button">
			<?php echo esc_html( get_theme_mod( 'wordcamp_sp_button_text' ) ); ?>
		</a>
	</p>
</div>

<div class="row marketing">
	<?php
		$col = get_theme_mod( 'blog_layout' );
		if ( ! $col ) {
			$col = 'col-lg-6';
		} else if ( 'one-column' === $col ) {
			$col = 'col-lg-12';
		} else if ( 'two-column' === $col ) {
			$col = 'col-lg-6';
		}


	?>
	<div class="<?php echo esc_attr( $col ); ?>">
		<h4>Subheading</h4>
		<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

		<h4>Subheading</h4>
		<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

		<h4>Subheading</h4>
		<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
	</div>

	<div class="<?php echo esc_attr( $col ); ?>">
		<h4>Subheading</h4>
		<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

		<h4>Subheading</h4>
		<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

		<h4>Subheading</h4>
		<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
	</div>
</div>

<?php get_footer(); ?>



