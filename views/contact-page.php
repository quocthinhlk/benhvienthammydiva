<?php
/**
 * template name: Liên hệ
 */
?>

<?php get_header(); ?>
<div class="big-wrapper contact_info_wrapper">
	<div class="page-header ph-align-center page-header-centered" style="background-image: url(<?php echo get_bloginfo('url').'/wp-content/themes/benhvienthammydiva/views/assets/images/vien-tham-my-diva-banner.jpg' ?>);">
		<div class="container">
			<h1 class="page-header-title">Liên hệ</h1>
			<div class="breadcrumb"><a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a> &nbsp; / &nbsp; <span class="current-item">Liên hệ</span></div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="contact_info">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<section class="contact-box">
							<i class="fas fa-map-marker-alt"></i>
							<h3>Địa chỉ</h3>
							<p><?php the_field('address', 'option'); ?></p>
						</section>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<section class="contact-box">
							<i class="fas fa-phone"></i>
							<h3>Điện thoại</h3>
							<p><?php the_field('phone', 'option'); ?></p>
						</section>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
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
						<h2 class="text-center">Liên hệ</h2>
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
<div class="contact_map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.843135408747!2d108.43275162923162!3d11.948688499470782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171132a1b43e0dd%3A0x35e2343b76fa65e3!2zVmnhu4duIFRo4bqpbSBN4bu5IERJVkEgLSDEkMOgIEzhuqF0!5e0!3m2!1svi!2s!4v1605855922315!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<?php get_footer(); ?>