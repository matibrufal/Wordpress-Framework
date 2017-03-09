<?php get_header(); ?>
<div class="archive"><div class="container">

	<?php if(have_posts()): ?>

		<?php the_archive_title( '<h1>', '</h1>' ); ?>

		<div class="feed">
			<?php while(have_posts()): the_post(); get_template_part('loop/loop'); endwhile; ?>
		</div>

		<?php the_posts_pagination() ?>

	<?php else: get_template_part('templates/template', 'noresults'); endif; ?>

</div></div>
<?php get_footer(); ?>