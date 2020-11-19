<div class="col-md-4"> 
	<section class="sidebar">
		<div id="search-3" class="title-style-2 widget widget_search">
			<form role="search" method="get" class="search-form" action="<?php bloginfo('url'); ?>/">
				<span class="search-field">
					<input type="hidden" name="post_type" value="post">
					<input type="text" placeholder="Tìm kiếm ..." name="s">
					<button type="submit"><span class="search-field"><i class="fas fa-search"></i></span></button>
				</span>
			</form>
		</div>
		<div class="widget"> 
			<p class="bar-cate">Tất cả danh mục</p>
			<ul class="sidebar-menu">

				<?php 
				$args = array(
				    'type'      => 'post',
				    'parent'    => '',
				    'hide_empty' => 1,
				);
				$categories = get_categories( $args );
					foreach ($categories as $categorie) {
						$name 				=	$categorie->name;
						$slug 				= 	$categorie->slug;
						$post_number 		=	$categorie->category_count;
					?>
					<li> <a href="<?php echo get_bloginfo('url').'/category/'.$slug; ?>"><i class="fa fa-angle-right"></i> <span class="title"><?php echo $name; ?></span> <span class="count"><?php echo $post_number; ?></span></a> </li>
					<?php } ?>

			</ul> 
		</div> 
		<div class="widget">
			<p class="bar-post">Bài viết mới nhất</p> 
			<ul class="posts-list"> 
				<?php 
				$args = array(
					'post_type' => 'post',
					'posts_per_page'	=>	3,
					'order' => 'DESC',
					'orderby' => 'date',
				);
				$the_query = new WP_Query( $args );
				?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="widget-content sidebar-widget-content">
							<li> 
								<a href=""> 
									<div class="images"> 
										<div class="bar-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
									</div>
									<span class="title"><?php the_title(); ?></span>
								</a>
							</li> 
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?> 
			</ul> 
		</div> 
		<div class="widget"> 
			<p class="bar-tag">Tags</p>
			<ul class="tagcloud">
				<?php 
				$tags = get_tags(array(
				  'hide_empty' => false
				));
				foreach ($tags as $tag) {
				  echo '<li>' . $tag->name . '</li>';
				}
				?>
			</ul>
		</div>
	</section>
</div>