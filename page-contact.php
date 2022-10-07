<?php
/*
Template Name: お問い合わせ
*/
get_header();
?>
<div class="p-pageHero">
  <img class="p-pageHero__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta.png, <?php echo get_template_directory_uri(); ?>/assets/img/common/cta@2x.png 2x" alt="" />
  <p class="p-pageHero__title -contact">お問い合わせ・資料請求</p>
</div>
<!-- /.p-pageHero -->
<div class="breadcrumbs">
  <div class="breadcrumb_inner">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>
  <!-- /.breadcrumb_inner -->
</div>
<!-- /.breadcrunmbs -->
<div class="l-spacer -medium">
  <div class="l-container">
    <div class="l-wrapper -contact">
      <div class="l-inner">
        <div class="p-contact">
          <p class="p-contact__text">
            弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
          </p>
          <?php the_content(); ?>
        </div>
        <!-- /.p-contact -->
      </div>
      <!-- /.l-inner -->
    </div>
    <!-- /.l-wrapper -->
  </div>
  <!-- /.l-container -->
</div>
</main>
<?php get_footer(); ?>
