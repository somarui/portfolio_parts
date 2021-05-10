<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/download.css" type="text/css">
</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>





<div class="content">

<div class="dl-headertitle"><img src="<?php echo get_template_directory_uri(); ?>/img/header-download.svg" alt=""></div>

  <div class="main">

    <div class="dl-mainblock">
      <div class="dl-maintitle">
        <p>資料一覧</p>
      </div>
        <ul>
          <li class="bd-top"><p>協会資料ダウンロード１</p><a href="">ダウンロード</a></li>
          <li><p>協会資料ダウンロード２</p><a href="">ダウンロード</a></li>
          <li><p>協会資料ダウンロード３</p><a href="">ダウンロード</a></li>
          <li><p>協会資料ダウンロード４</p><a href="">ダウンロード</a></li>
          <li><p>協会資料ダウンロード５</p><a href="">ダウンロード</a></li>
        </ul>
    </div>

    <div class="top-btn">
      <a href="<?php bloginfo('url') ;?>">
        <p>トップへ戻る</p>
      </a>
    </div>

  </div>
</div>

<?php get_footer(); ?>