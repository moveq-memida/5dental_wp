<?php
/**
 * 5DENTAL テーマの関数とカスタマイズ
 *
 * @package 5DENTAL
 */

// テーマの設定
function fivedental_theme_setup() {
    // テーマの翻訳対応
    load_theme_textdomain( '5dental', get_template_directory() . '/languages' );
    
    // タイトルタグのサポート
    add_theme_support( 'title-tag' );
    
    // カスタムメニューのサポート
    register_nav_menus( array(
        'primary' => __( 'プライマリメニュー', '5dental' ),
        'footer' => __( 'フッターメニュー', '5dental' ),
    ) );
    
    // アイキャッチ画像のサポート
    add_theme_support( 'post-thumbnails' );
    
    // HTML5マークアップのサポート
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'search-form',
    ) );
    
    // カスタムロゴのサポート
    add_theme_support( 'custom-logo', array(
        'height'      => 48,
        'width'       => 145,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
}
add_action( 'after_setup_theme', 'fivedental_theme_setup' );

// スタイルシートとスクリプトの読み込み
function fivedental_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@400;500;600;700;900&family=Pinyon+Script&display=swap', array(), null );
    
    // メインスタイルシート
    wp_enqueue_style( 'fivedental-uaplus', get_template_directory_uri() . '/assets/css/uaplus.css', array(), '1.0.0' );
    
    // フロントページ用スタイル
    if ( is_front_page() ) {
        wp_enqueue_style( 'fivedental-frontpage', get_template_directory_uri() . '/assets/css/frontpage.css', array(), '1.0.0' );
    }
    wp_enqueue_style( 'fivedental-main', get_template_directory_uri() . '/assets/css/main.css', array('fivedental-uaplus'), '1.0.0' );
    wp_enqueue_style( 'fivedental-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // JavaScriptファイル
    wp_enqueue_script( 'fivedental-category-menu', get_template_directory_uri() . '/assets/js/category-menu.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'fivedental_enqueue_assets' );

// サイドバーウィジェットエリアの登録
function fivedental_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'サイドバー', '5dental' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'サイドバーにウィジェットを追加', '5dental' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'フッターウィジェット1', '5dental' ),
        'id'            => 'footer-1',
        'description'   => __( 'フッターエリア1', '5dental' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'フッターウィジェット2', '5dental' ),
        'id'            => 'footer-2',
        'description'   => __( 'フッターエリア2', '5dental' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'フッターウィジェット3', '5dental' ),
        'id'            => 'footer-3',
        'description'   => __( 'フッターエリア3', '5dental' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'fivedental_widgets_init' );

// カスタム投稿タイプ：診療メニュー
function fivedental_create_post_types() {
    // 診療メニュー
    register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __( '診療メニュー', '5dental' ),
                'singular_name' => __( '診療メニュー', '5dental' ),
                'add_new' => __( '新規追加', '5dental' ),
                'add_new_item' => __( '新しい診療メニューを追加', '5dental' ),
                'edit_item' => __( '診療メニューを編集', '5dental' ),
                'new_item' => __( '新しい診療メニュー', '5dental' ),
                'view_item' => __( '診療メニューを表示', '5dental' ),
                'search_items' => __( '診療メニューを検索', '5dental' ),
                'not_found' => __( '診療メニューが見つかりません', '5dental' ),
                'not_found_in_trash' => __( 'ゴミ箱に診療メニューはありません', '5dental' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'menu_icon' => 'dashicons-clipboard',
        )
    );
    
    // コラム
    register_post_type( 'column',
        array(
            'labels' => array(
                'name' => __( 'コラム', '5dental' ),
                'singular_name' => __( 'コラム', '5dental' ),
                'add_new' => __( '新規追加', '5dental' ),
                'add_new_item' => __( '新しいコラムを追加', '5dental' ),
                'edit_item' => __( 'コラムを編集', '5dental' ),
                'new_item' => __( '新しいコラム', '5dental' ),
                'view_item' => __( 'コラムを表示', '5dental' ),
                'search_items' => __( 'コラムを検索', '5dental' ),
                'not_found' => __( 'コラムが見つかりません', '5dental' ),
                'not_found_in_trash' => __( 'ゴミ箱にコラムはありません', '5dental' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'column'),
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author' ),
            'menu_icon' => 'dashicons-edit-page',
        )
    );
}
add_action( 'init', 'fivedental_create_post_types' );

// カスタムタクソノミー：診療カテゴリー
function fivedental_create_taxonomies() {
    register_taxonomy(
        'service_category',
        'service',
        array(
            'labels' => array(
                'name' => __( '診療カテゴリー', '5dental' ),
                'singular_name' => __( '診療カテゴリー', '5dental' ),
                'search_items' => __( 'カテゴリーを検索', '5dental' ),
                'all_items' => __( 'すべてのカテゴリー', '5dental' ),
                'parent_item' => __( '親カテゴリー', '5dental' ),
                'parent_item_colon' => __( '親カテゴリー:', '5dental' ),
                'edit_item' => __( 'カテゴリーを編集', '5dental' ),
                'update_item' => __( 'カテゴリーを更新', '5dental' ),
                'add_new_item' => __( '新しいカテゴリーを追加', '5dental' ),
                'new_item_name' => __( '新しいカテゴリー名', '5dental' ),
                'menu_name' => __( '診療カテゴリー', '5dental' ),
            ),
            'hierarchical' => true,
            'rewrite' => array( 'slug' => 'service-category' ),
        )
    );
}
add_action( 'init', 'fivedental_create_taxonomies' );

// ナビゲーションメニューのカスタムウォーカー
class FiveDental_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'header__nav-item';
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $output .= '<li' . $class_names . '>';
        
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="header__nav-link"';
        
        $item_output = $args->before ?? '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= ($args->link_before ?? '') . apply_filters('the_title', $item->title, $item->ID) . ($args->link_after ?? '');
        $item_output .= '</a>';
        $item_output .= $args->after ?? '';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

// 管理画面のカスタマイズ
function fivedental_admin_customization() {
    // ダッシュボードのウィジェット削除
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
}