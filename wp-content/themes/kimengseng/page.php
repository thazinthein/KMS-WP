<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<div class="body container">
        <div class="col-md-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
				<article class="post" id="post-<?php the_ID(); ?>">

					<h2><?php the_title(); ?></h2>					

					<div class="entry">

						<?php the_content(); ?>						

					</div>

					<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>

				</article>				
				

			<?php endwhile; endif; ?>
		</div>
</div>



<?php get_footer(); ?>