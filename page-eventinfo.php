<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/event.css" type="text/css">

</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>



<div class="content">
  <div class="main">

    <div class="e-m-img"><img src="<?php echo get_template_directory_uri(); ?>/img/header-event.png" alt="" class="img-onoff"><img src="<?php echo get_template_directory_uri(); ?>/img/header-event-sp.png" alt="" class="img-onoff-sp"></div>
    <div class="e-m-eventlist">
      <div class="e-m-searchform">
        <p class="searchtitle">新着情報</p>
        <div class="formnewinfo">

          <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
            <input type="text" name="s" class="searchtext" placeholder="キーワード検索"/><input type="image" src="<?php echo get_template_directory_uri(); ?>/img/mushimegane.png" name="button1"class="btn" alt="送信する"></form>
            <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
              <input type="text" class="categorytext" list="category" placeholder="絞り込み" autocomplete="off"><datalist id="category">
              <option value="開催日順">
            　<option value="学校説明会">
            　<option value="オープンキャンパス">
            　<option value="体験入学">
            　<option value="イベント">
            </datalist><input type="image" src="<?php echo get_template_directory_uri(); ?>/img/shitayazirushi.png" name="button1"class="btn" alt="送信する">
          </form>

        </div>
        <p class="searchtitle-sp">新着情報</p>
      </div>
      <div class="e-m-eventnew items">

      <section class="sec_news">
          <?php
            $args = array(
            'post_type' => 'eventinfo',  //カスタム投稿タイプ名
            'posts_per_page' => 3, // 表示件数
            );
          ?>
          <ul>
            <?php $myposts = new WP_Query($args);
              if($myposts->have_posts()): while($myposts->have_posts()): $myposts->the_post();
            ?>

            <li>
              <div class="m-i-list-label">
                <div class="date m-i-list-date"><?php echo get_the_date(); ?></div>
                <div class="honbun m-i-list-content"><<?php echo get_the_content(); ?></div>
              </div>
              <div class="m-i-list-sec">
                <a href="<?php the_permalink();?>">
                <div class="honbun m-i-list-p3"><?php echo mb_substr(strip_tags($post-> post_content), 0, 100).'...'; ?></div>
                </a>
                <div class="honbun m-i-list-p3"><?php echo mb_substr(strip_tags($post-> post_content), 0, 100).'...'; ?></div>
              </div>
            </li>


            <?php endwhile; endif;?>
          </ul>

      </section>

      </div>

        <ul class="paging-ul">
          <li class="paging-li">1</li>
          <li class="paging-li">2</li>
          <li class="paging-li">3</li>
          <li class="paging-li">4</li>
          <li class="paging-li">>></li>
        </ul>

      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>