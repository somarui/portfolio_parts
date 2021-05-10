<?php
/**
 * fukusenkaku WordPress Theme
 * @author: raen
 * @link: https://raen.jp
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-sp.css" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css">

  <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>

  <!-- jQueryのライブラリの読み込み -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  <!--ヘッダースライドショー埋め込み-->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
   <link href="<?php echo get_template_directory_uri(); ?>/js/slick-theme.css" rel="stylesheet" type="text/css">
   <link href="<?php echo get_template_directory_uri(); ?>/js/slick.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <!-- jQuery ページネーション -->
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.pagination.js"></script>


  <?php wp_head(); ?>
