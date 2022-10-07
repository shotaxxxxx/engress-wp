<?php

/**
 * テーマのセットアップ
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5', //HTML5でマークアップ
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/**
 * ブログページ(archive)のtitleタグ変更
 **/
function change_title_tag($title) {
  $site_title = get_bloginfo("name");
  if (is_archive() && !is_post_type_archive("news")) {
    $title = "ブログ - $site_title";
  }
  return $title;
}
add_filter("pre_get_document_title", "change_title_tag");


/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init() {
  wp_enqueue_style('common-css', get_template_directory_uri() . '/assets/css/common.css', array(), filemtime(get_theme_file_path('assets/css/common.css')), 'all');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.bundle.js', array() ,'1.0.1', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'blog'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// ナビゲーションメニュー
function register_my_menus() {
  register_nav_menus(array(
    "header" => "header-menu",
    "footer" => "footer-menu"
  ));
}
add_action("after_setup_theme", "register_my_menus");
