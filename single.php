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
      <div class="l-inner -articleSingle">
        <div class="p-articleSingle">
          <div class="p-articleSingle__left">
            <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
            ?>
                <article class="p-articleSingle__inner">
                  <div class="p-articleSingle__header">
                    <p class="p-articleSingle__category c-category">
                      <?php
                      $category = get_the_category();
                      echo $category[0]->name;
                      ?>
                    </p>
                    <h1 class="p-articleSingle__title c-post__title">
                      <?php the_title(); ?>
                    </h1>
                    <div class="p-articleSingle__bottom">
                      <div class="p-articleSingle__snsicon">
                        <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
                      </div>
                      <p class="p-articleSingle__publish">
                        <time data-time="<?php the_time(DATE_W3C); ?>"><?php the_time("Y-m-d"); ?></time>
                      </p>
                    </div>
                  </div>
                  <!-- /.p-blogSingle__header -->
                  <p class="p-articleSingle__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('post-thumbnail'); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/common/no-picture.png" alt="タイトル">
                    <?php endif; ?>
                  </p>
                  <div class="p-articleSingle__content">
                    <?php the_content(); ?>
                  </div>
                  <!-- /.p-articleSingle__content -->
                </article>
            <?php endwhile;
            endif; ?>
            <section class="l-spacer -mediumTop">
              <h2 class="p-recommend__heading">おすすめ記事</h2>
              <div class="l-recommend">
                <?php
                $args = array(
                  "posts_per_page" => 3,
                  "orderby" => "rand",
                  "tag" => "pickup"
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <article class="l-recommend__item">
                      <a href="<?php the_permalink(); ?>" class="c-media p-recommend">
                        <div class="c-media__body p-recommend__body">
                          <h3 class="p-recommend__title"><?php the_title(); ?></h3>
                          <p class="p-recommend__publish">
                            <time data-time="<?php the_time(DATE_W3C); ?>"><?php the_time("Y-m-d"); ?></time>
                          </p>
                        </div>
                        <p class="p-recommend__image">
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('post-thumbnail'); ?>
                          <?php else : ?>
                            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/common/no-picture.png" alt="タイトル">
                          <?php endif; ?>
                        </p>
                        <p class="p-recommend__category c-category">
                          <?php
                          $category = get_the_category();
                          echo $category[0]->name;
                          ?>
                        </p>
                      </a>
                    </article>
                  <?php endwhile;
                else : ?>
                  <p>おすすめ記事はまだありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </div>
            </section>
          </div>
          <!-- /.p-articleSingle__left -->
          <div class="l-sidebar p-sidebar">
            <div class="p-sidebar__relate">
              <p class="p-sidebar__box">関連記事</p>
              <div class="l-sidebar__items">
                <?php
                $cats = get_the_category();
                $cat_ID = array();
                foreach ($cats as $cat) :
                  array_push($cat_ID, $cat->cat_ID);
                endforeach;
                $args = array(
                  "post__not_in" => array($post->ID),
                  "posts_per_page" => 3,
                  "category__in" => $cat_ID,
                  "orderby" => "rand"
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <article class="l-sidebar__item">
                      <a href="<?php the_permalink(); ?>" class="c-media p-relateArticle">
                        <div class="c-media__body p-relateArticle__body">
                          <p class="p-relateArticle__title"><?php the_title(); ?></p>
                        </div>
                        <p class="p-relateArticle__image">
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('post-thumbnail'); ?>
                          <?php else : ?>
                            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/common/no-picture.png" alt="タイトル">
                          <?php endif; ?>
                        </p>
                      </a>
                    </article>
                  <?php endwhile;
                else : ?>
                  <p>関連記事はありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </div>
              <!-- /.l-sidebar__items -->
            </div>
            <!-- /.p-sidebar__relate -->
            <div class="p-sidebar__category">
              <p class="p-sidebar__box">カテゴリー</p>
              <ul class="p-sidebar__lists">
                <?php
                $cats = get_categories();
                foreach ($cats as $cat) {
                  echo '<li class="p-sidebar__list"><a class="p-sidebar__link" href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a></li>';
                }
                ?>
              </ul>
            </div>
            <!-- /.p-sidebar__category -->
          </div>
          <!-- /.l-sidebar -->
        </div>
        <!-- /.p-articleSingle -->
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
