<?php get_header(); ?>
<div class="single blog"><div class="container">
<div class="responsive">

	<section class="content left">

		<article>
			<?php if (has_post_thumbnail()):
				echo '<div class="thumbnail">';
					the_post_thumbnail('full', array('alt' => ''.get_the_title().''));
				echo '</div>';
			endif; ?>

			<h1><?php the_title(); setPostViews(get_the_ID()); ?></h1>

			<?php while (have_posts()) : the_post(); the_content(); endwhile; wp_reset_query(); ?>
		</article>

		<div class="comments">
			<?php comments_template( '', true ); ?>
		</div>

	</section>

	<?php get_sidebar(); ?>

</div>
</div></div>
<?php get_footer(); ?>