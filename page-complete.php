<?php
/*
Template Name: 送信完了
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
          <p class="p-complete__text">お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします</p>
          <p class="p-complete__bottom"><a class="p-complete__link" href="<?php echo esc_url(home_url("/")); ?>">ホームへ戻る</a></p>
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
