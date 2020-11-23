<footer class="footer">
  <div class="main-footer">
    <div class="container">
      <div class="col-sm-5">
        <h4>Giới thiệu viện thẩm mỹ Diva</h4>
        <p class="footer_text">Viện Thẩm Mỹ DIVA là trung tâm thẩm mỹ và chăm sóc sắc đẹp hiện đại, với sứ mệnh cung cấp các dịch vụ chăm sóc sắc đẹp hàng đầu. Lấy chất lượng dịch vụ làm mục tiêu cốt lõi để tồn tại, Viện Thẩm Mỹ DIVA luôn cam kết mang đến cho khách hàng công nghệ thẩm mỹ tiên tiến nhất, giúp người Việt có cơ hội sử dụng dịch vụ thẩm mỹ đạt chuẩn Hàn Quốc ngay tại Việt Nam. Sự hài lòng của bạn chính là mục tiêu mà chúng tôi luôn theo đuổi.</p>
      </div>
      <div class="col-sm-3">
        <h4>Liên kết</h4>
        <ul class="contact">
          <?php 
          $args = array(
              'type'      => 'post',
              'parent'    => '',
              'hide_empty' => 1,
          );
          $categories = get_categories( $args );
            foreach ($categories as $categorie) {
              $name         = $categorie->name;
              $slug         =   $categorie->slug;
              $post_number    = $categorie->category_count;
            ?>
            <li><a href="<?php echo get_bloginfo('url').'/category/'.$slug; ?>"><?php echo $name; ?></a></li>
            <?php } ?>
        </ul>
      </div>
      <div class="col-sm-4">
        <h4>Liên hệ</h4>
        <ul class="contact">
          <li>
            <i class="fas fa-envelope"></i>
            <a href="">Mail: <?php the_field('email', 'option'); ?></a>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <a href="">Điện thoại: <?php the_field('phone', 'option'); ?></a>
          </li>
          <li>
            <i class="fas fa-clock"></i>
            <a href="">Thời gian làm việc: <?php the_field('working-time', 'option'); ?></a>
          </li>
          <li>
            <i class="fas fa-map-marker-alt"></i>
            <a href="">Địa chỉ: <?php the_field('address', 'option'); ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center copyright">
    <div class="container">
      <div class="col-sm-6">
        <div class="copy-right">
          <p class="text-left copyright1">Copyright © 2020 - Viện thẩm mỹ Diva</p>
        </div>
      </div>
      <div class=" col-sm-6">
        <div class="social-links">
          <a href="<?php the_field('facebook', 'option'); ?>"><i class="fab fa-facebook-f"></i></a>
          <a href="<?php the_field('google_plus', 'option'); ?>"><i class="fab fa-google-plus-g"></i></a>
          <a href="<?php the_field('twitter', 'option'); ?>"><i class="fab fa-twitter"></i></a>
          <a href="<?php the_field('pinterest', 'option'); ?>"><i class="fab fa-pinterest"></i></a>
          <a href="<?php the_field('linkedin', 'option'); ?>"><i class="fab fa-linkedin-in"></i></a>
          <a href="<?php the_field('instagram', 'option'); ?>"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<a href="#" class="go-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

</body>
<?php wp_footer(); ?>
</html>