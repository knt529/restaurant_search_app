<?php
// 最低限の記述
function my_setup() {
  add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
  add_theme_support( 'html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_setup' );

// テーマフォルダ直下のeditor-style.cssを読み込み
add_action('admin_init',function(){
    add_editor_style();
});

// wp_headで任意のcss・jsファイルを読み込ませる
function my_script_init() {
  wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/common.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'core', get_template_directory_uri() . '/add/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );


// bodyにスラッグを用いたclassを付与する
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;

    $parent_id = $page->post_parent;
    if ( 0 == $parent_id ) {
      $classes[] = get_post($parent_id)->post_name;
    } else {
      $progenitor_id = array_pop( get_ancestors( $page->ID, 'page', 'post_type' ) );
      $classes[] = get_post($progenitor_id)->post_name . '-child';
    }
  }
  return $classes;
}
