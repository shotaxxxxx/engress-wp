<?php get_header(); ?>
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
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <article class="p-newsSingle">
              <h1 class="p-newsSingle__title"><?php the_title(); ?></h1>
              <p class="p-newsSingle__publish">
                <time data-time="<?php the_time(DATE_W3C); ?>"><?php the_time("Y-m-d"); ?></time>
              </p>
              <div class="p-newsSingle__content">
                <?php the_content(); ?>
              </div>
              <!-- /.p-newsSingle__content -->
            </article>
        <?php endwhile;
        endif; ?>
      </div>
      <!-- /.l-inner -->
    </div>
    <!-- /.l-wrapper -->
  </div>
  <!-- /.l-container -->
</div>
<!-- /.l-spacer -->
</main>
<section>
  <div class="p-footerCta">
    <p class="p-footerCta__text">まずは無料で資料請求から</p>
    <div class="p-footerCta__button">
      <a href="<?php echo esc_url(home_url("/")); ?>contact" class="c-button -rounded">資料請求</a>
    </div>
    <p class="p-footerCta__contact"><a href="<?php echo esc_url(home_url("/")); ?>contact">お問い合わせ</a></p>
  </div>
  <!-- /.p-footerCta -->
  <div class="l-wrapper p-footerInfo">
    <p class="p-footerInfo__text">お電話でのお問い合わせはこちら</p>
    <p class="p-footerInfo__tel"><a href="tel:0123-456-7890">0120-456-7890</a></p>
    <p class="p-footerInfo__time">平日<time class="-pl">08:00</time>~<time>20:00</time></p>
  </div>
  <!-- /.p-footerInfo -->
</section>
<?php get_footer(); ?>
