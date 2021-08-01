<?php

function portfoliosite4_scripts() {
  //cssを読み込む
wp_enqueue_style( 'portfoliosite4', get_stylesheet_uri() );
  //jsを読み込む
wp_enqueue_script( 'portfoliosite4', get_template_directory_uri() . '/js/sqript.js', array('jquery'), '20210613', true );

}

add_action( 'wp_enqueue_scripts', 'portfoliosite4_scripts' );

add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu1', 'theme-slug' ) );
}

// タイトルタグの設定
function setup_my_theme() {
  add_theme_support( 'title-tag' );
}

//カスタムメニューのサポート
register_nav_menu( 'header-menu', 'サイト上部のメインメニュー' );

register_nav_menu( 'sp-menu', 'spメニュー' );


// パンくずリスト
function mytheme_breadcrumb() {
	if ( !is_front_page() && !is_home() ) :
 
	endif;
  $sep = '>';
  echo '<a href="'.get_bloginfo('url').'" >HOME</a>';
  echo $sep;
}