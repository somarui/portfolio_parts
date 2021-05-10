<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/links.css" type="text/css">
</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>


<div class="content">

<div class="li-headertitle"><img src="<?php echo get_template_directory_uri(); ?>/img/header-links.svg" alt=""></div>

  <div class="main">

    <div class="li-mainblock1">

      <div class="li-mainsec li-mainsec1">
        <h2>関連サイトのリンク集</h2>
        <a href="https://www.mext.go.jp/"><img src="<?php echo get_template_directory_uri(); ?>/img/li-img1.png" class="banner-left" alt=""></a>
        <a href="http://www.zenkei.or.jp/"><img src="<?php echo get_template_directory_uri(); ?>/img/li-img2.png" class="banner-right" alt=""></a>
        <a href="https://www.city.fukuoka.lg.jp/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/li-img3.png" class="banner-left" alt=""></a>
        <a href="https://www.pref.fukuoka.lg.jp/"><img src="<?php echo get_template_directory_uri(); ?>/img/li-img4.png" class="banner-right" alt=""></a>
        <a href="https://www.zensenkaku.gr.jp/zensen_index.cgi"><img src="<?php echo get_template_directory_uri(); ?>/img/li-img5.png" class="banner-left" alt=""></a>
        <a href="https://www.sgec.or.jp/index_new.cgi"><img src="<?php echo get_template_directory_uri(); ?>/img/li-img6.png" class="banner-right" alt=""></a>
      </div>

    </div>

    <a class="m-i-btn-a" href="<?php bloginfo('url') ;?>">
        <div class="m-i-btn">
          <p class="m-i-btn-p">トップへ戻る</p>
        </div>
    </a>


  </div>
</div>

<?php get_footer(); ?>