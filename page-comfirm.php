<?php
/*
Template Name: お問い合わせ（確認）
*/
get_header();
?>
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
    <div class="l-wrapper">
      <div class="l-inner">
        <div class="p-complete">
          <?php the_content(); ?>
        </div>
      </div>
      <!-- /.l-inner -->
    </div>
    <!-- /.l-wrapper -->
  </div>
  <!-- /.l-container -->
</div>
<!-- /.l-spacer -->
</main>
<?php get_footer(); ?>
