<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-sp.css" type="text/css">
</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>






<div class="content">
  <div class="m-top">            
    <ul class="autoplay">
      <li><a href="<?php bloginfo('url') ;?>/search"><img src="<?php echo get_template_directory_uri(); ?>/img/header-top.svg"></a></li>
      <li><a href="<?php bloginfo('url') ;?>/charm"><img src="<?php echo get_template_directory_uri(); ?>/img/header-top1.png"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/header-top2.png"></a></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/header-top3.png"></a></li>
    </ul>
  </div>
  <div class="main">

    <div class="m-info">
      <div class="m-i-title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/main-info-title1.svg" alt="">
        <h2 class="m-i-title-h2">お知らせ<br class="br-off"><span class="m-i-title-h2-2">NEWS</span></h2>
      </div>
      <div class="m-i-list">

      <section class="sec_news">
          <?php
            $args = array(
            'post_type' => 'news',  //カスタム投稿タイプ名
            'posts_per_page' => 3, // 表示件数
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


      <!-- 投稿（メイン）を一覧表示 -->
      <!-- <section class="sec_blog">
        <div class="sec_head"  style="padding:50px;">記事</div>
          <ul>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
              <a href="<?php the_permalink();?>">
                <div class="outline">
                  <div class="title"><?php the_title();?></div>
                  <div class="date"><?php echo get_the_date(); ?></div>
                  <div class="descri"><?php the_excerpt();?></div>
                  <div class="honbun"><?php the_content(); ?></div>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </section> -->


      <a class="m-i-btn-a" href="<?php bloginfo('url') ;?>/news">
        <div class="m-i-btn">
          <img class="m-i-btn-img" src="<?php echo get_template_directory_uri(); ?>/img/main-info-title2.svg" alt="">
          <p class="m-i-btn-p">協会からのお知らせ一覧へ</p>
        </div>
      </a>

    </div>

    <div class="m-contents">
      <div class="m-c-title">
        Contents
      </div>
      <div class="m-c-group">
        <div class="m-c-group-left">
          <div class="m-c-group-img1"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img1-1.svg" alt=""></a></div>

          <div class="m-c-group-img3"><a href="<?php bloginfo('url') ;?>/requestdocument"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-1.svg" alt=""></a></div>
          <div class="m-c-group-img3"><a href="http://www.fsk-net.or.jp/global/"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-2.svg" alt=""></a></div>
          <div class="m-c-group-img3"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-3.svg" alt=""></a></div>

          <div class="m-c-group-img2"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img2-4.svg" alt=""></a></div>

          <div class="m-c-group-img3"><a href="<?php bloginfo('url') ;?>/greeting"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-4.svg" alt=""></a></div>
          <div class="m-c-group-img3"><a href="<?php bloginfo('url') ;?>/download"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-5.svg" alt=""></a></div>
          <div class="m-c-group-img3"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-8.svg" alt=""></a></div>
          <div class="m-c-group-img3"><a href="<?php bloginfo('url') ;?>/links"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-10.svg" alt=""></a></div>
          <div class="clearfx"></div>
        </div>

        <div class="m-c-group-right">
          <div class="m-c-group-img2"><a href="<?php bloginfo('url') ;?>/pamphlet"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img2-1.svg" alt=""></a></div>
          <div class="m-c-group-img2"><a href="<?php bloginfo('url') ;?>/event"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img2-3.svg" alt=""></a></div>

          <div class="m-c-group-img1"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img1-2.svg" alt=""></a></div>

          <div class="m-c-group-img2"><a href="https://webtest001.work/fsk_application/member/login"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img2-5.svg" alt=""></a></div>
          
          <div class="m-c-group-img3"><a href="<?php bloginfo('url') ;?>/endorsement"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-6.svg" alt=""></a></div>
          <div class="m-c-group-img3"><a href="<?php bloginfo('url') ;?>/aboutus"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-7.svg" alt=""></a></div>
          <div class="m-c-group-img3"><a href="<?php bloginfo('url') ;?>/supportingmember"><img src="<?php echo get_template_directory_uri(); ?>/img/c-img3-9.svg" alt=""></a></div>
          <div class="clearfx"></div>
        </div>

        <!-- レスポンシブ 配置 -->
        <div class="m-c-group-sp">
          <div class="c-group-sp "><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp1.svg" alt=""></a></div>
          <div class="c-group-sp "><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp2.svg" alt=""></a></div>
          <div class="c-group-sp "><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp2.svg" alt=""></a></div>
          <div class="c-group-sp "><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp1.svg" alt=""></a></div>

          <div class="c-group-sp-twins">
            <div class="c-group-sp left"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp3.svg" alt=""></a></div>
            <div class="c-group-sp right"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp3.svg" alt=""></a></div>
          </div>
          <div class="clearfx"></div>


          <div class="c-group-sp "><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp2.svg" alt=""></a></div>
          <div class="c-group-sp "><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp2.svg" alt=""></a></div>
          <div class="c-group-sp "><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp2.svg" alt=""></a></div>

          <div class="c-group-sp-twins">
            <div class="c-group-sp left"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp3.svg" alt=""></a></div>
            <div class="c-group-sp right"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp3.svg" alt=""></a></div>
          </div>
          <div class="clearfx"></div>

          <div class="c-group-sp-twins">
            <div class="c-group-sp left"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp3.svg" alt=""></a></div>
            <div class="c-group-sp right"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp3.svg" alt=""></a></div>
          </div>
          <div class="clearfx"></div>

          <div class="c-group-sp-twins">
            <div class="c-group-sp left"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp3.svg" alt=""></a></div>
            <div class="c-group-sp right"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp3.svg" alt=""></a></div>
          </div>
          <div class="clearfx"></div>

          <div class="c-group-sp-twins">
            <div class="c-group-sp left"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/c-img-sp3.svg" alt=""></a></div>
          </div>
          <div class="clearfx"></div>
          
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>

