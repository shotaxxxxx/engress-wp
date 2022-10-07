 <?php
  get_header();
  ?>
 <div class="p-pageHero">
   <img class="p-pageHero__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-fv.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-fv.png, <?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-fv@2x.png 2x" alt="" />
   <p class="p-pageHero__title">ブログ</p>
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
         <h2 class="c-heading">
           <?php $cat_info = get_category($cat); ?>
           <?php echo esc_html($cat_info->name); ?>一覧
         </h2>
         <div class="l-blogPage">
           <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
            ?>
               <article class="l-blogPage__item">
                 <a href="<?php the_permalink(); ?>" class="c-media p-blogPage">
                   <div class="c-media__body p-blogPage__body">
                     <h3 class="p-blogPage__title"><?php the_title(); ?></h3>
                     <div class="p-blogPage__text">
                       <?php the_excerpt(); ?>
                     </div>
                     <p class="p-blogPage__publish">
                       <time data-time="<?php the_time(DATE_W3C); ?>"><?php the_time("Y-m-d"); ?></time>
                     </p>
                   </div>
                   <p class="p-blogPage__image">
                     <?php if (has_post_thumbnail()) : ?>
                       <?php the_post_thumbnail('post-thumbnail'); ?>
                     <?php else : ?>
                       <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/common/no-picture.png" alt="タイトル">
                     <?php endif; ?>
                   </p>
                   <p class="p-blogPage__category c-category">
                     <?php
                      $category = get_the_category();
                      echo $category[0]->name;
                      ?>
                   </p>
                 </a>
               </article>
             <?php endwhile;
            else : ?>
             <p>まだ記事がありません</p>
           <?php endif; ?>
           <?php wp_reset_postdata(); ?>
           <?php the_posts_pagination(
              array(
                "mid_size" => 1,
                "type" => "list",
              )
            ); ?>
         </div>
         <!-- /.l-blogPage -->
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
