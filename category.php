<?get_header(); ?>
<div id="static_container_news">
	<div id="row_news">
		<div id="left_category">
				
				<h1><? echo single_cat_title( '', false )?></h1>
				<?
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo  $category_description;
				?>
				<div class="separator"></div>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="container_article">
					<div class="row_article">
						<?
						$image = get_thumbail($post->ID, "thumbnail");
						if($image){
						?>
						<div class="photo_article">
							<a href="<?php the_permalink()?>" title="<?php the_title() ?>">
							  <?php echo get_thumbail($post->ID, "thumbnail"); ?>
							</a>
						</div>
						<?}?>
						<div class="lead_article">
							</span> 
							<!--<span class="data_single"><?php the_time('d-m-Y'); ?></span>-->
							<div class="tit_article"><a href="<?php the_permalink()?>" title="<?php the_title() ?>"> <?php the_title(); ?></a> </div>
							<div class="text"> <?php the_content_rss('', TRUE, '', 30); ?> </div>
						</div>
					</div>
				</div>
		
			<?php endwhile; ?>
			<?php if(function_exists('wp_paginate')) {
				wp_paginate('range=4&anchor=2&nextpage=Següent&previouspage=Anterior');
			} ?>

		</div>
	
	</div>
</div>		
<div class="clear"></div>
<?php get_footer(); ?>
