<?php get_header() ?>
<div class="big-wrapper wrapper_category">
	<div class="page-header ph-align-center page-header-centered" style="background-image: url(<?php echo get_bloginfo('url').'/wp-content/themes/benhvienthammydiva/views/assets/images/vien-tham-my-diva-banner.jpg' ?>);">
		<div class="container">
			<h1 class="page-header-title"><?php single_cat_title(); ?></h1>
			<div class="breadcrumb"><a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a> &nbsp; / &nbsp; <span class="current-item"><?php single_cat_title(); ?></span></div>
		</div>
	</div>
	<div class="wrapper"> 
		<div class="container"> 
			<div class="row section-space"> 
				<div class="col-md-8">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post();  ?>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<article class="blog-post">
									<div class="gallery-single-image">
										<a href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
									</div>
									<p><?php echo get_the_date(); ?></p>
									<h3 class="cate-title"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
									<p class="btn_view_full"><a class="button" href="<?php echo get_permalink() ?>"><span>Xem thêm</span></a></p>
								</article>
							</div>
						<?php endwhile; else : ?>
					<?php endif; ?>
					<div class="cate-posts-navi">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
							'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
						?>
					</div> 
				</div>
				<?php get_sidebar(); ?> 
			</div>
		</div> 
	</div> 
</div>
<?php get_footer() ?>