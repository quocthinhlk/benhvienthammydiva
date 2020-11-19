<?php
/**
 * template name: Liên hệ
 */
?>

<?php get_header(); ?>
<div class="big-wrapper contact-wrapper">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="container">
				<div class="row content-padding contact-page">
					<div class="col-md-4 col-sm-12 col-xs-12 vertical-align-middle">
						<section class="contact-box">
							<i class="fas fa-map-marker-alt"></i>
							<h3>Địa chỉ</h3>
							<p><?php the_field('address', 'option'); ?></p>
						</section>
						<section class="contact-box">
							<i class="fas fa-phone"></i>
							<h3>Điện thoại</h3>
							<p><?php the_field('phone', 'option'); ?></p>
						</section>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 vertical-align-middle text-center contact-logo">
						<p>
							<?php $image = get_field('logo', 'option'); ?>
			                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</p>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 vertical-align-middle">
						<section class="contact-box">
							<i class="fas fa-clock"></i>
							<h3>Thời gian làm việc</h3>
							<p><?php the_field('working-time', 'option'); ?></p>
						</section> 
						<section class="contact-box"> 
							<i class="fas fa-envelope"></i>
							<h3>E-mail</h3> 
							<p><?php the_field('email', 'option'); ?></p>
						</section> 
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg-gray section-space">
	<div class="row">
		<div class="col-md-12">
			<div class="form">
				<div class="row section-title">
					<div class="col-md-12">
						<h2 class="text-center">Đăng ký tư vấn</h2>
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
						<button class="button " type="button"><span>Đăng ký</span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>