<?php
/*
Template Name: お知らせ
*/
get_header(); ?>
<div class="p-pageHero">
  <img class="p-pageHero__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/news.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/news/news.png, <?php echo get_template_directory_uri(); ?>/assets/img/news/news@2x.png 2x" alt="" />
  <p class="p-pageHero__title">お知らせ</p>
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
<section class="l-spacer -medium">
  <div class="l-container">
    <div class="l-wrapper">
      <div class="l-inner">
        <h2 class="c-heading">お知らせ一覧</h2>
        <div class="l-newsPage">
          <?php
          $paded = get_query_var("paged") ? get_query_var("paged") : 1;
          $args = array(
            "post_type" => "news",
            "paged" => $paged,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <article class="l-newsPage__item">
                <a href="<?php the_permalink(); ?>" class="p-newsPage">
                  <h3 class="p-newsPage__title">
                    <?php the_title(); ?>
                  </h3>
                  <p class="p-newsPage__publish">
                    <time data-time="<?php the_time(DATE_W3C); ?>"><?php the_time("Y-m-d"); ?></time>
                  </p>
                </a>
              </article>
            <?php endwhile;
          else : ?>
            <p>まだ記事がありません</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          <?php
          $big = 999999999;
          the_posts_pagination(
            array(
              "base" => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
              "mid_size" => 1,
              "type" => "list",
              "format" => "?paged=%#%",
              "total" => $the_query->max_num_pages,
            )
          ); ?>
        </div>
        <!-- /.l-newsPage -->
      </div>
      <!-- /.l-inner -->
    </div>
    <!-- /.l-wrapper -->
  </div>
  <!-- /.l-container -->
</section>
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
