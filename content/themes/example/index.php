<?php get_header() ?>

<a href="<?= esc_url( home_url( '/' ) ) ?>"><?php _e( 'Home' ) ?></a>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
	<article <?php post_class() ?>>
		<h1>
			<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
		</h1>
		<?php the_content() ?>
	</article>
<?php endwhile; endif ?>

<?php get_footer() ?>
