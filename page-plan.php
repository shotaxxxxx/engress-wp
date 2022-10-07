<?php
/*
Template Name: コース・料金
*/
get_header(); ?>
<div class="p-pageHero">
  <img class="p-pageHero__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/plan/plan-fv.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/plan/plan-fv.png, <?php echo get_template_directory_uri(); ?>/assets/img/plan/plan-fv@2x.png 2x" alt="" />
  <p class="p-pageHero__title">コース・料金</p>
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
<section class="l-spacer -medium p-price">
  <div class="l-container">
    <div class="l-wrapper">
      <h2 class="c-heading">料金体系</h2>
      <div class="l-inner">
        <div class="p-price__items">
          <span class="p-price__item">入会金 39,800円</span>
          <span class="p-price__plus">+</span>
          <span class="p-price__item">月額費用</span>
        </div>
        <!-- /.p-price__items -->
        <p class="p-price__text">
          Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
        </p>
      </div>
      <!-- /.l-price__inner -->
    </div>
    <!-- /.l-wrapper -->
  </div>
  <!-- /.l-container -->
</section>
<section class="l-spacer -medium p-plan">
  <div class="l-container">
    <div class="l-wrapper">
      <h2 class="c-heading">料金表</h2>
      <div class="l-inner">
        <div class="p-plan__scroll js-scroll">
          <ul class="p-plan__items">
            <li class="p-plan__item">
              <div class="p-plan__header">
                <h3 class="p-plan__title">基礎プラン</h3>
              </div>
              <div class="p-plan__body">
                <?php if (get_field("foundation")) : ?>
                <h4 class="p-plan__price"><?php the_field("foundation"); ?><span>*月額（税抜価格）</span></h4>
                <?php endif; ?>
                <ul class="p-plan__lists">
                  <li class="p-plan__list">カリキュラム作成</li>
                  <li class="p-plan__list">TOEFL学習サポート</li>
                  <li class="p-plan__list">週一回のビデオMTG</li>
                </ul>
              </div>
            </li>
            <li class="p-plan__item">
              <div class="p-plan__header">
                <h3 class="p-plan__title">演習プラン</h3>
              </div>
              <div class="p-plan__body">
                <?php if (get_field("exercise")) : ?>
                <h4 class="p-plan__price"><?php the_field("exercise"); ?><span>*月額（税抜価格）</span></h4>
                <?php endif; ?>
                <ul class="p-plan__lists">
                  <li class="p-plan__list">カリキュラム作成</li>
                  <li class="p-plan__list">TOEFL学習サポート</li>
                  <li class="p-plan__list">週一回のビデオMTG</li>
                  <li class="p-plan__list">月二回の模試（解説付き）</li>
                </ul>
              </div>
            </li>
            <li class="p-plan__item">
              <div class="p-plan__header -recommend">
                <h3 class="p-plan__title"><span>おすすめ</span>志望校対策プラン</h3>
              </div>
              <div class="p-plan__body">
                <?php if (get_field("recommend")) : ?>
                  <h4 class="p-plan__price -recommend"><?php the_field("recommend"); ?><span>*月額（税抜価格）</span></h4>
                  <?php endif; ?>
                <ul class="p-plan__lists">
                  <li class="p-plan__list">カリキュラム作成</li>
                  <li class="p-plan__list">TOEFL学習サポート</li>
                  <li class="p-plan__list">週一回のビデオMTG</li>
                  <li class="p-plan__list">月二回の模試（解説付き）</li>
                  <li class="p-plan__list">週一の英語面接対策</li>
                </ul>
              </div>
            </li>
            <li class="p-plan__item">
              <div class="p-plan__header">
                <h3 class="p-plan__title">フレックスプラン</h3>
              </div>
              <div class="p-plan__body">
                <?php if (get_field("flex")) : ?>
                <h4 class="p-plan__price"><?php the_field("flex"); ?><span>*月額（税抜価格）</span></h4>
                <?php endif; ?>
                <ul class="p-plan__lists">
                  <li class="p-plan__list -noicon">＊別途ご相談ください</li>
                </ul>
              </div>
            </li>
          </ul>
          <!-- /.p-plan__items -->
        </div>
        <!-- /.p-plan__scroll -->
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
