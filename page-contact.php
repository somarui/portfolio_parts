<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-sp.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" type="text/css">

</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>


<div class="content">
<div class="main">


<div class="otoiawase">

<h2 class="con-title"><img src="<?php echo get_template_directory_uri(); ?>/img/con-img1sample.png" alt=""></h2>
<p class="tCenter">下記項目をご入力の上[送信する]ボタンを押してお問い合わせください。</p>

<?php echo do_shortcode( '[contact-form-7 id="335" title="お問い合わせ２"]' ); ?>

</div>



</div>
</div>

<?php get_footer(); ?>

