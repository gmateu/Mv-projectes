
	<?php get_header(); ?>
	<?php // **include ('subheader.php'); ?>
	<?php //include ('sidebar_left.php'); ?>
		<div id="container">
		    <?php if ( is_active_sidebar(2) ) {?>
			<div id="left_page">
				<?php dynamic_sidebar(2) ;?>
			</div>
			<?}else{;?>
				<p>res</p>
		  <?}?>
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post"  id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content(); ?>
					<p class="postmetadata">
						<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
						<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
					</p>
				</div>
			</div>
			<?php endwhile; ?>
			<div class="navigation">
				<?php posts_nav_link('Entre','Abans','Posts posteriors'); ?>
			</div>
		<?php else : ?>
			<div class="post">
				<h2><?php _e('Not Found'); ?></h2>
			</div>
		<?php endif; ?>
	</div>
	<?php //include ('sidebar_right.php'); ?>
	<?php get_footer(); ?>
</div>
</body>


</html>
