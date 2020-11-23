<?php
/**
 * template name: Trang chủ
 */
?>

<?php get_header(); ?>

<div class="big-wrapper big-wrapper-slideshow wp_slider">
	<div class="slideshow">
		<div class="slider-2 owl-carousel owl-loaded owl-drag">
			<?php if( have_rows('slider') ): ?>
				<?php while( have_rows('slider') ): the_row(); 
					$image = get_sub_field('slider-picture');
					?>
					<div class="image-slider-content" style="background-image: url(<?php echo $image['url']; ?>);"></div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<section class=" section-space">
	<div class="row section-title">
		<div class="container">
			<div class="col-md-12">
				<h2 class="text-center txt_center">Dịch vụ nổi bật</h2>
				<p><?php the_field('intro-services'); ?></p>
			</div>
		</div>
	</div>
	<div class="row no-gutter">
		<div class="container">
			<div class="slider-3 owl-carousel owl-loaded owl-drag">
				<?php
				if( have_rows('highlight-services') ): 
					while( have_rows('highlight-services') ) : the_row();
						$name       =   get_sub_field('service-name');
						$description  =   get_sub_field('service-description');
						$image      =   get_sub_field('service-image');
						$url      =   get_sub_field('service-link');
						?>
						<div class="col-sm-6 col-md-4">
							<div class="panel highlingt_detail margin-top30">
								<div class="panel-body text-center">
									<a href="<?php echo $url ?>"><img src="<?php echo $image['url'] ?>" alt="<?php echo $name ?>"></a>
								</div>
								<h4 class="highlingt_title"><a href="<?php echo $url ?>"><?php echo $name ?></a></h4>
								<p class="highlingt_description"><?php echo $description ?></p>

							</div>
						</div>
					<?php endwhile;
				endif;
				?>
			</div>
		</div> 
	</div> 
</section>

<section class="bg-gray section-space about_services">
	<div class="container">
		<div class="row">
			<div class="col-md-6 vertical-align-middle service-img service_background">
				<img src="https://spruko.com/demo/bioplex/assets/img/bg2.png" alt="image">
			</div>
			<div class="col-md-6 vertical-align-middle services services service_content">
				<h1>Viện thẩm mỹ Diva</h1>
				<p class="important">Viện thẩm mỹ DIVA là trung tâm thẩm mỹ và chăm sóc sắc đẹp hiện đại, với sứ mệnh cung cấp các dịch vụ chăm sóc sắc đẹp hàng đầu.</p>
				<p>Duis ex turpis, faucibus at urna vel, euismod aliquam ante. Integer at purus libero. Proin gravida augue vitae dapibus vestibulum. Nam porta lectus eget massa sagittis interdum.</p>
				<ul>
					<li><i aria-hidden="true" class="far fa-circle"></i><span>Body Massage</span></li>
					<li><i aria-hidden="true" class="far fa-circle"></i><span>Facials</span></li>
					<li><i aria-hidden="true" class="far fa-circle"></i><span>Hair Removal</span></li>
					<li><i aria-hidden="true" class="far fa-circle"></i><span>Body Treatments</span></li>
					<li><i aria-hidden="true" class="far fa-circle"></i><span>Spa Serene</span></li>
				</ul>
				<p class="space"><a class="button" href=""><span>Xem thêm</span></a></p>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row"> 
		<div class="col-md-12">
			<section class="gallery">
				<div class="row section-title">
					<div class="col-md-12"> 
						<h2 class="text-center txt_center">Chuyên mục nổi bật</h2>
					</div>
				</div>
				<ul class="gallery-filters">
					<li class="filter filter-active" onclick="openGallery(event, 'all')">Tất cả</li>
					<li class="filter" onclick="openGallery(event, 'phunTheu')">Phun thêu thẩm mỹ</li>
					<li class="filter" onclick="openGallery(event, 'dieuTriDa')">Điều trị da</li>
				</ul> 
				<div class="gallery-images gallery-images-active" id="all">
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  6,
						'order' => 'DESC',
						'orderby' => 'ID',
					);
					$the_query = new WP_Query( $args ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-md-4 col-sm-6">
								<div class="box3">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									<div class="box-content">
										<p class="description"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>

					<div class="gallery-images" id="phunTheu"> 
						<?php $args = array(
							'post_type' => 'post',
							'posts_per_page'  =>  3,
							'order' => 'DESC',
							'orderby' => 'ID',
							'tax_query' => array(
								array(
									'taxonomy' => 'category',
									'field'    => 'slug',
									'terms'    => 'phun-theu-tham-my',
								),
							),
						);
						$the_query = new WP_Query( $args ); ?>
						<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="col-md-4 col-sm-6">
									<div class="box3">
										<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
										<div class="box-content">
											<p class="description"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></p>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
						</div>

						<div class="gallery-images" id="dieuTriDa"> 
							<?php $args = array(
								'post_type' => 'post',
								'posts_per_page'  =>  3,
								'order' => 'DESC',
								'orderby' => 'ID',
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field'    => 'slug',
										'terms'    => 'dieu-tri-da',
									),
								),
							);
							$the_query = new WP_Query( $args ); ?>
							<?php if ( $the_query->have_posts() ) : ?>
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="col-md-4 col-sm-6">
										<div class="box3">
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
											<div class="box-content">
												<p class="description"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></p>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								<?php else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>
							</div>
						</section>
						<div class="custom-model-main">
							<div class="custom-model-inner">        
								<div class="close-btn">×</div>
								<div class="custom-model-wrap">
									<img src="" alt="">
								</div>  
							</div>  
							<div class="bg-overlay"></div>
						</div>
					</div>
				</div>
			</div>

			<section class="bg-gray section-space">
				<div class="row section-title section_video">
					<div class="col-md-12"> 
						<h2 class="text-center txt_center">Video</h2>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<?php $image = get_field('video_image'); ?>
						<div class="col-md-6 vertical-align-middle service-img service_video" style="background-image: url(<?php echo esc_url($image['url']); ?>);">
							<a data-popup-open="popup-1" class="img-block" href=""><div class="circle"><span class="play"></span></div></a>
						</div>
						<div class="col-md-6 vertical-align-middle services">
							<a data-popup-open="popup-1" href=""><h3 class="video-con-title"><?php the_field('video_title'); ?></h3></a>
							<p class="intro"><?php the_field('video_description'); ?></p>
						</div>
					</div>
				</div>
			</section>

			<div class="popup" data-popup="popup-1">
				<div class="popup-inner">
					<?php the_field('video_embed'); ?>
					<a class="popup-close" data-popup-close="popup-1" href="#">x</a>
				</div>
				<div class="close_video" data-popup-close="popup-1"></div>
			</div>

			<div class="container section-space">
				<div class="fun-facts counter-iconic section_space relative text-center overly1 parallax">
					<div class="row section-title">
						<div class="col-md-12">
							<h2 class="text-center">Vì sao nên chọn viện thẩm mỹ Diva?</h2>
							<p>Viện Thẩm Mỹ DIVA là nơi giúp bạn chăm sóc sắc đẹp với nhiều dịch vụ đa dạng. Công nghệ kĩ thuật tiên tiến, kỹ thuật viên tay nghề cao.</p>
						</div>
					</div>
					<div class="clearfix relative z-index10">
						<div class="col-md-3">
							<div class="counter margin-top30">
								<div class="text-center">
									<div class="icon center-block"><i class="far fa-smile"></i></div>
								</div>
								<span class="what-do">Cơ sở thẩm mỹ trên toàn quốc</span>
								<span class="number quantity-counter1 quantity-counter highlight facts">40</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="counter margin-top30">
								<div class="text-center">
									<div class="icon center-block">
										<i class="fa fa-users"></i>
									</div>
								</div>
								<span class="what-do">Quy tụ đội ngũ chuyên gia</span>
								<span class="number quantity-counter2 quantity-counter highlight facts">200</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="counter margin-top30">
								<div class="text-center">
									<div class="icon center-block">
										<i class="fa fa-user-plus"></i>
									</div>
								</div>
								<span class="what-do">Cập nhật xu hướng</span>
								<span class="number quantity-counter3 quantity-counter highlight facts">223</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="counter margin-top30">
								<div class="text-center">
									<div class="icon center-block">
										<i class="fa fa-share-alt"></i>
									</div>
								</div>
								<span class="what-do">Bằng cấp sự chuyên nghiệp</span>
								<span class="number quantity-counter4 quantity-counter highlight facts">526873</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid bg-gray">
				<div class="row">
					<div class="col-md-12">
						<section class="recent-news">
							<div class="container">
								<div class="row section-title">
									<div class="col-md-12">
										<h2 class="text-center txt_center">Bài viết nổi bật</h2>
									</div>
								</div>
								<div class="row">
									<div class="recent_content">
										<?php
										$q = new WP_Query(array(
											'post_type'         =>  'post',
											'posts_per_page'    =>  4,
											'meta_key'          =>  'post_views_count',
											'orderby'           =>  'meta_value_num',
											'order'             =>  'DESC'
										));
										if($q->have_posts()):
											while ($q->have_posts()):$q->the_post(); ?>
												<div class="col-md-3 col-sm-12 col-xs-12 highlight_post">
													<a href="<?php echo get_permalink() ?>"><div class="highlight_post_img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div></a>
													<div class="highlight_post_txt">
														<b class="date"><?php echo get_the_date(); ?></b>
														<h4><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h4>
													</div>
												</div>
											<?php endwhile;
										endif; wp_reset_query();
										?>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

			<section class="pricingtables section-space">
				<div class="row section-title">
					<div class="col-md-12">
						<h2 class="text-center txt_center">Tin tức - Sự kiện</h2>
					</div>
				</div>
				<div class="row no-gutter">
					<div class="container">
						<div class="slider-3 owl-carousel owl-loaded owl-drag">
							<?php $args = array(
								'post_type' => 'post',
								'posts_per_page'  =>  5,
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field'    => 'slug',
										'terms'    => 'tin-tuc-su-kien',
									),
								),
							);
							$the_query = new WP_Query( $args ); ?>
							<?php if ( $the_query->have_posts() ) : ?>
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="col-sm-6 col-md-4">
										<div class="panel panel-info margin-top30">
											<div class="panel-body text-center">
												<a href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
											</div>
											<p class="text-center panel-info-title"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></p>
											<div class="panel-footer text-center">
												<a class="button" href="<?php echo get_permalink() ?>"><span>Xem thêm</span></a>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								<?php else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>
							</div>
						</div> 
					</div> 
				</section>

				<div class="container-fluid bg-gray">
					<div class="row"> 
						<div class="col-md-12">
							<section class="references"> 
								<div class="row section-title"> 
									<div class="col-md-12"> 
										<h2 class="text-center txt_center">Ý kiến khách hàng</h2>
									</div> 
								</div>
								<div class="references-slider references-slider-active ">
									<div class="slider-2 owl-carousel owl-theme">
										<?php
										if( have_rows('comment_customer') ):
											while( have_rows('comment_customer') ) : the_row();
												$name     =   get_sub_field('customer_name');
												$job 	  =   get_sub_field('customer_job');
												$avatar   =   get_sub_field('customer_avatar');
												$comment  =   get_sub_field('comment_detail');
												?>
												<div class="col-md-8 center-block customer">
													<div class="customer_img" style="background-image: url(<?php echo $avatar['url'] ?>);"></div>
													<div class="customer_txt">
														<p class="customer_name"><?php echo $name ?></p>
														<p class="reference-job"><?php echo $job ?></p>
														<p class="customer_comment"><?php echo $comment ?></p>
													</div>
												</div>
											<?php endwhile;
										endif;
										?>
									</div>

								</div> 
							</section> 
						</div> 
					</div> 
				</div>

				<div class="section-space">
					<div class="row">
						<div class="col-md-12">
							<div class="form">
								<div class="row section-title">
									<div class="col-md-12">
										<h2 class="text-center txt_center">Liên hệ</h2>
									</div>
								</div>
								<form class="col-md-6 center-block form-active clearfix " data-client-email-field="E-mail" data-client-name-field="Name" data-title="New email from your website" method="post">
									<div class="col-md-6">
										<input class="form-field" name="Name" placeholder="Tên" type="text">
									</div>
									<div class="col-md-6">
										<input class="form-field" data-required="no" name="Phone" placeholder="Điện thoại" type="text">
									</div>
									<div class="col-md-6">
										<input class="form-field" name="E-mail" placeholder="Email" type="email">
									</div>
									<div class="col-md-6">
										<input class="form-field" name="Subject" placeholder="Tiêu đề" type="text">
									</div>
									<div class="col-md-12">
										<textarea class="form-field" cols="5" name="message" placeholder="Nội dung" rows="10"></textarea>
									</div>
									<div class="col-md-12 text-center">
										<button class="button " type="button"><span>Gửi</span></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<?php get_footer(); ?>