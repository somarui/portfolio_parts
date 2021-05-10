<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/archive-news.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single-news.css" type="text/css">
</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>



<div class="s-headertitle"><img src="<?php echo get_template_directory_uri(); ?>/img/header-news.svg" alt=""></div>


<div class="content">

<div class="main">

<div class="m-info">
  <div class="m-i-title">
    <img src="<?php echo get_template_directory_uri(); ?>/img/main-info-title1.svg" alt="">
    <h2 class="m-i-title-h2">お知らせ<br class="br-off"><span class="m-i-title-h2-2">NEWS</span></h2>
  </div>
  <div class="m-i-list">

  <section class="sec_news">
      <ul>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li>


          <div class="m-i-list-sec">
          <div class="date m-i-list-date"><?php echo get_the_date("Y/m/d"); ?></div>

            <a href="<?php the_permalink();?>">
              <div class="title m-i-list-p2"><?php the_title();?></div>
            </a>
            <div class="honbun m-i-list-p3"><?php the_content(); ?></div>
          </div>
        </li>

      <?php endwhile; endif; ?>

      </ul>

  </section>

  </div>



  <a class="m-i-btn-a" href="<?php bloginfo('url') ;?>/news">
    <div class="m-i-btn news-btn">
      <!-- <img src="img/main-info-title2.png" alt=""> -->
      <p class="m-i-btn-p news-btn-p">一覧へ戻る</p>
    </div>
  </a>

</div>
</div>



</div>

<?php get_footer(); ?>