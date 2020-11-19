<?php get_header() ?>
<div class="big-wrapper">
	<div class="wrapper"> 
		<div class="container"> 
			<div class="row section-space"> 
				<div class="col-md-8">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post();  ?>
							<article class="blog-post">
								<div class="images gallery-single-image">
									<a href=""><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
								</div>
								<p><?php echo get_the_date(); ?></p>
								<h3 class="cate-title"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
								<p><?php the_excerpt(); ?></p>
								<p><a class="button" href="<?php echo get_permalink() ?>"><span>Xem thêm</span></a></p>
							</article>
						<?php endwhile; else : echo '<p class="not_find">Không tìm thấy kết quả phù hợp</p>' ?>
					<?php endif; ?>
					<div class="cate-posts-navi">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('<i class="fas fa-caret-left"></i>'),
							'next_text'    => __('<i class="fas fa-caret-right"></i>'),
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