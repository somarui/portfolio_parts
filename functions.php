<?php 
// タイトル追加
function init_func() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}
add_action('init', 'init_func');

// Feedにアイキャッチ画像を表示する
function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '<p>' . get_the_post_thumbnail($post->ID) . '</p>' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

//ウィジェット追加
function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );


// ヘッダー追加
// カスタムヘッダー
add_theme_support( 'custom-header' );


//更新日時順に呼び出しを変更
function my_sort_order_by_modifired ( $query ) {
	if ( $query->is_main_query() ) {
		$query->set( 'orderby', 'modified' );
	}
}
add_action( 'pre_get_posts', 'my_sort_order_by_modifired' );




// カスタム投稿（プラグイン使用せず）post_typeは10文字以内制限 学校パンフレット
add_action("init", function() {
  register_post_type("pamphlet",
  [
    "label" => "学校パンフレット",
    "public" => true,
    "menu_icon" => "dashicons-media-default",
    "supports" => ["thumbnail", "title", "editor", "cumtom-fields"],
    'has_archive' => true
  ]);
});

// カスタム投稿（プラグイン使用せず）post_typeは10文字以内制限 学校検索
add_action("init", function() {
  register_post_type("schoolsearch",
  [
    "label" => "学校検索",
    "public" => true,
    "menu_icon" => "dashicons-admin-home",
    "supports" => ["thumbnail", "title", "editor", "cumtom-fields"],
    'has_archive' => true
  ]);
});

function column_posts($query) {
/*フック：ずっとじゃなくて5件まで取ってきてねという指示*/
if( is_admin() || !$query->is_main_query()){
    return;
}
// ニュース一覧ページにて表示件数を１０件にする
if( $query->is_post_type_archive("news")){
    $query->set("posts_per_page","4");
    return;
}
}
add_action("pre_get_posts","column_posts");



// search-〇〇.php を使えるようにする記述テンプレ
add_filter('template_include','custom_search_template');
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}

//AddQuicktagをカスタム投稿で表示させる
add_filter( 'addquicktag_post_types', 'my_addquicktag_post_types' );
function my_addquicktag_post_types( $post_types ) {
	$post_types[] = 'schoolsearch';
	return $post_types;
}

?>