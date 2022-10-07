<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="日本人へのTOEFL指導豊かな講師陣のコーチング型TOEFLスクール" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="l-container">
      <div class="p-header__inner">
        <h1 class="p-header__title">
          <span class="u-visuallyHidden" lang="en">Engress</span>
          <a href="<?php echo esc_url(home_url("/")); ?>" class="p-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header-logo.png" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/header-logo.png, <?php echo get_template_directory_uri(); ?>/assets/img/common/header-logo@2x.png 2x" />
          </a>
        </h1>
        <nav class="p-header__nav">
          <h2 class="u-visuallyHidden">サイト内メニュー</h2>
          <button type="button" class="js-drawer c-button p-hamburger" aria-controls="global-nav" aria-expanded="false">
            <span class="p-hamburger__line">
              <span class="u-visuallyHidden">メニューを開閉する</span>
            </span>
          </button>
          <ul id="global-nav" class="p-globalNav">
            <li class="p-globalNav__item">
              <?php
              wp_nav_menu(array(
                "theme_location" => "header",
                "container" => false,
                "menu_class" => "p-navMenu"
              ));
              ?>
            </li>
            <li class="p-globalNav__item -xxs">
              <div class="p-header__cta">
                <div class="p-header__info">
                  <p class="-time">平日<time>08:00</time>〜<time>20:00</time></p>
                  <p class="-tel">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/tel.png" alt="tel" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/tel.png, <?php echo get_template_directory_uri(); ?>/assets/img/common/tel@2x.png 2x" />
                    0120-456-7890
                  </p>
                </div>
                <!-- /.p-header__info -->
                <div class="p-header__buttons">
                  <p class="p-header__button"><a href="<?php echo esc_url(home_url("/")); ?>contact" class="c-button -primary">資料請求</a></p>
                  <p class="p-header__button"><a href="<?php echo esc_url(home_url("/")); ?>contact" class="c-button -secondary">お問い合わせ</a></p>
                </div>
                <!-- /.p-header__buttons -->
              </div>
              <!-- /.p-header__cta -->
            </li>
          </ul>
          <div class="p-header__cta -lg">
            <div class="p-header__info">
              <p class="-time">平日<time>08:00</time>〜<time>20:00</time></p>
              <p class="-tel">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/tel.png" alt="tel" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/tel.png, <?php echo get_template_directory_uri(); ?>/assets/img/common/tel@2x.png 2x" />
                0120-456-7890
              </p>
            </div>
            <!-- /.p-header__info -->
            <div class="p-header__buttons">
              <p class="p-header__button"><a href="<?php echo esc_url(home_url("/")); ?>contact" class="c-button -primary">資料請求</a></p>
              <p class="p-header__button"><a href="<?php echo esc_url(home_url("/")); ?>contact" class="c-button -secondary">お問い合わせ</a></p>
            </div>
            <!-- /.p-header__buttons -->
          </div>
          <!-- /.p-header__cta -->
        </nav>
      </div>
      <!-- /.p-header__inner -->
    </div>
    <!-- /.l-container -->
  </header>
  <main class="l-main">
