<?php /* Template Name: Signature Steel Intro */ ?>
<?php get_header(); ?>
<div id="content">
	<?php while ( have_posts() ) : the_post() ?>

		<article class="post">
			<p><?php the_field('intro'); ?></p>
			
			<?php // links to all sub pages
				if(get_field('dss')):
					while(the_repeater_field('dss')):
						?>
							<a href="<?php the_sub_field('link'); ?>">
								<img class="fit mt-1x mb-0" src="<?php the_sub_field('image'); ?>" alt="<?php the_field('heading'); ?>">
							</a>
						<?php
					endwhile;
				endif;
			?>
		</article>

	<?php endwhile; ?>
</div>
<?php get_footer(); ?>