<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pamphlet.css" type="text/css">

</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>



<div class="content content-bg">
  <div class="main">

    <div class="e-m-searchform">
      
          <div class="searchtitle">
            <img src="<?php echo get_template_directory_uri(); ?>/img/p-imgtitle.png" alt="">
          
            <div class="searchformlist1">

              <form method="get" role="search" id="searchform"  action="<?php bloginfo('url'); ?>">
                <input type="text" name="s" id="s" class="categorytext" list="category" placeholder="カテゴリー" autocomplete="off"><datalist id="category">
                  <option value="まなべる分野">
                　<option value="地区から絞り込み">
                　<option value="修学支援新制度認定校">
                　<option value="職業実践専門課程認定校">
                　<option value="留学生受け入れ">
                </datalist><input type="hidden" value="<?php echo get_post_type(); ?>" name="post_type" id="post_type"><input type="image" src="<?php echo get_template_directory_uri(); ?>/img/shitayazirushi.png" name="button1"class="btn" alt="送信する">
              </form>
            </div>

            <div class="searchformlist2">
              <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
                <input type="text" name="s" id="s" class="searchtext" placeholder="学校名など"/><input type="hidden" value="<?php echo get_post_type(); ?>" name="post_type" id="post_type"><input type="image" src="<?php echo get_template_directory_uri(); ?>/img/mushimegane.png" name="button1"class="btn" alt="送信する">
              </form>  
            </div>

          </div>

    </div>



    <section class="sec_news">
    </section>


    <div class="pamphletlist">
      <!-- カスタム投稿(pamphlet)の検索結果を表示 -->
      <?php
      $search_query = new WP_Query( array( 'post_type' => get_query_var( 'post_type', 'post' ), 'paged' => get_query_var( 'paged', 1 ), 's' => get_search_query() ) );
      if ( $search_query->have_posts() ) {
        while ( $search_query->have_posts() ) {
          $search_query->the_post();
          /* ループ内で表示させる処理 */
      ?>        
        <div class="p-list1">
          <?php the_post_thumbnail('thumbnail'); ?>
        </div>
      <?php
        }
      }
      wp_reset_postdata();
      ?>

    </div>


    <div id="graydisplay">
        <a href="">パンフを見る</a>
    </div>


  </div>

  <div class="navigation">
    <?php if(function_exists('wp_pagenavi')): ?>
    <?php wp_pagenavi();?>
    <?php else: ?>
    <?php endif; ?>
  </div>

</div>

<?php get_footer(); ?>



<!-- モーダルウィンドウ -->
<script>
    $(function(){
  $(".p-list1 img").click(function() {
    $("#graydisplay").html($(this).prop('outerHTML'));
    $("#graydisplay a").html($(this).prop('outerHTML'));
    $("#graydisplay, #graydisplay a").fadeIn();
  });
  $("#graydisplay, #graydisplay img").click(function() {
    $("#graydisplay").fadeOut();
  });
});
</script>