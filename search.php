<?php get_header(); ?>
<div class="archive search"><div class="container">

	<?php if(have_posts()): ?>

		<h1><?php printf( __('Search Results for: %s'), get_search_query() ); ?></h1>

		<div class="feed">
			<?php while(have_posts()): the_post(); get_template_part('loop/loop'); endwhile; ?>
		</div>

		<?php the_posts_pagination() ?>

	<?php else: get_template_part('templates/template', 'noresults'); endif; ?>

</div></div>
<?php get_footer(); ?>