<?php get_header(); ?>
<div class="big-wrapper wrapper_single">
	<div class="wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="images">
					<div class="image image_single" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
					</div> 
				</div> 
			</div> 
		</div> 
		<div class="container"> 
			<div class="row section-space wp-section-space single_post_detail">
				
				<div class="col-md-8">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<article class="blog-post">
								<p><?php echo get_the_date(); ?></p>
								<h2><?php the_title(); ?></h2> 
								<div class="blog-post-content"> 
									<p><?php the_content() ?></p>   
								</div> 
								<div class="tags-and-categories">
									<p>
										<span class="title">Tags:</span>
										<?php
										$posttags = get_the_tags();
										if ($posttags) {
											foreach($posttags as $tag) {
												$tag_name = $tag->name;
												echo '<span class="element">'.$tag_name.'</span>';
											}
										}
										?>
									</p>
									<p>
										<span class="title">Danh mục:</span>
										<?php
										$category = get_the_category();
										$cate_name = $category[0]->cat_name;
										$cate_slug = $category[0]->slug;
										?>
										<a class="element" href="<?php echo get_bloginfo('url').'/category/'.$cate_slug; ?>"><?php echo $cate_name ?></a> 
									</p>
								</div>  
							</article> 
						<?php endwhile; else : ?>
						<p>Đang cập nhật</p>
					<?php endif; ?>

					<section class="panel panel-default">
						<div class="panel-heading"> 
							<h3 class="panel-title">Bài viết cùng chuyên mục</h3> 
						</div> 
						<div class="panel-body">
							<div class="row">
								<?php
								$related = new WP_Query(
									array(
										'category__in'   => wp_get_post_categories( $post->ID ),
										'posts_per_page' => 3,
										'post__not_in'   => array( $post->ID )
									)
								);
								if( $related->have_posts() ) { 
									while( $related->have_posts() ) { 
										$related->the_post();
										?>
										<div class="col-md-4 col-sm-4">
											<article class="post-grid">
												<div class="img-holder">
													<a href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
													<div class="hover-info">
														<span class="label label-primary"><i class="fas fa-calendar-alt"></i> <time><?php echo get_the_date(); ?></time> </span>
													</div>
												</div>
												<div class="content-item">
													<h4 class="title"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h4>
													</div>
												</article>
											</div> 
										<?php }
										wp_reset_postdata();
									}
									?>
								</div>
							</div>
						</section>
					</div>
					<?php get_sidebar(); ?>
				</div> 
			</div> 
		</div>
	</div>
	<?php get_footer(); ?>