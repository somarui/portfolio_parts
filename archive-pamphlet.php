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

              <form method="get" id="searchform"  action="<?php bloginfo('url'); ?>">
                <input type="text" class="categorytext" list="category" placeholder="カテゴリー" autocomplete="off"><datalist id="category">
                  <option value="まなべる分野">
                　<option value="地区から絞り込み">
                　<option value="修学支援新制度認定校">
                　<option value="職業実践専門課程認定校">
                　<option value="留学生受け入れ">
                </datalist><input type="image" src="<?php echo get_template_directory_uri(); ?>/img/shitayazirushi.png" name="button1"class="btn" alt="送信する">
              </form>
            </div>

            <div class="searchformlist2">
              <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
                <input type="text" name="s" id="s" class="searchtext" placeholder="学校名など"/><input type="hidden" value="pamphlet" name="post_type" id="post_type"><input type="image" src="<?php echo get_template_directory_uri(); ?>/img/mushimegane.png" name="button1"class="btn" alt="送信する">
              </form>  
            </div>

          </div>

    </div>

    <?php
        $args = array(
        'post_type' => 'pamphlet',
        'paged' => $paged,
        'posts_per_page' => 21
        );

        $myposts = new WP_Query($args);
    ?>
    <div class="book-list">
      <?php if ($myposts->have_posts()):
        while ($myposts->have_posts()): $myposts->the_post();
      ?>

      <div class="book">
        <div class="inner">
          <a><?php the_post_thumbnail('medium'); ?></a>
        </div> 
        <span class="hidden-date">2021.04.01</span>
        <span class="hidden-name"><?php the_title(); ?></span>
      </div>
      
      <?php endwhile; endif;?>

      <div class="modal">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="inner">
          <div class="modal-img"></div>
          <p class="modal-date"></p>
        </div>
        <p class="modal-name"></p>
        <div class="modal-btn uk-text-center">
          <button class="uk-button uk-button-primary modal-link" type="button"><a href="#">パンフを見る</a></button>
        </div>
      </div>
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
    $(".book a img").click(function() {
      console.log($(this).parent().parent().next("span"));
      var modal_date = $(this).parent().parent().next("span");
      var modal_name = $(this).parent().parent().next("span").next("span");
      $(".modal-img").html($(this).prop('outerHTML'));
      $(".modal-date").html(modal_date);
      $(".modal-name").html(modal_name);
      //var modal-date = $(this).next(".modal-date").clone();
      //console.log(modal-date);
      //$(".modal-date").html(modal-date);
      $(".modal").fadeIn();
    });
    $(".uk-modal-close-default").click(function() {
      $(".modal").fadeOut();
    });

    $(".container").click(function() {
      var clickedElement = $(event.target);
      if (!$(clickedElement).hasClass('attachment-medium')){
        if(!$(clickedElement).hasClass('modal')) {
          $(".modal").fadeOut();
        }
      };
      
    });
  });
</script>