<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/archive-news.css" type="text/css">
</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>



<div class="an-headertitle"><img src="<?php echo get_template_directory_uri(); ?>/img/header-news.svg" alt=""></div>

  <div class="content">
    <div class="main">

    <div class="m-info">
      <div class="m-i-p1"><p>協会からの情報をお知らせします</p></div>
      <div class="m-i-title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/main-info-title1.svg" alt="">
        <h2 class="m-i-title-h2">お知らせ<br class="br-off"><span class="m-i-title-h2-2">NEWS</span></h2>
      </div>
      <div class="m-i-list">

      <section class="sec_news">
          <?php
            $args = array(
            'post_type' => 'news',  //カスタム投稿タイプ名
            'paged' => $paged
            );
          ?>
          <ul>
            <?php $myposts = new WP_Query($args);
              if($myposts->have_posts()): while($myposts->have_posts()): $myposts->the_post();
            ?>

            <li>
              <div class="m-i-list-label">
                <div class="date m-i-list-date"><?php echo get_the_date("Y/m/d"); ?></div>
                <?php the_excerpt();?>
              </div>
              <div class="m-i-list-sec">
                <a href="<?php the_permalink();?>">
                  <div class="title m-i-list-p2"><?php the_title();?></div>
                </a>
                <div class="honbun m-i-list-p3"><?php echo mb_substr(strip_tags($post-> post_content), 0, 50).'...'; ?></div>
              </div>
            </li>

            <?php endwhile; endif;?>
          </ul>
      </section>

      </div>
              <div class="navigation">
                <?php if(function_exists('wp_pagenavi')): ?>
                <?php wp_pagenavi();?>
                <?php else: ?>
                <?php endif; ?>
              </div>



      <a class="m-i-btn-a" href="<?php bloginfo('url') ;?>">
        <div class="m-i-btn">
          <p class="m-i-btn-p">トップへ戻る</p>
        </div>
      </a>

    </div>

  </div>
</div>

<?php get_footer(); ?>
