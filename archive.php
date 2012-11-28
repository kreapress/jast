<?php get_header(); ?>

<div id="primary">
	
	<h1 class="page-title"><?php jast_archive_title(); ?></h1>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( 'echo=0' ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<div class="published-on"><?php jast_published_on(); ?></div>
			</header>

			<div class="entry-body">
				<?php jast_entry_body( 'excerpt' ); ?>
			</div>

			<footer class="entry-footer">
				<?php jast_post_meta(); ?>
			</footer>

		</article>

		<?php comments_template(); ?>

	<?php endwhile; ?>

		<?php jast_pagination(); ?>

	<?php else: ?>

		<p class="no-entries-found">No entries found.</p>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>