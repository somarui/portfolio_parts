<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/search.css" type="text/css">
</head>
<body>
<div class="container">
<header>
  <?php get_template_part("nav"); ?>
</header>
<div class="content">
  <div class="main">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img0-1.svg" alt="福岡の専門学校を探してみよう！"></h1>
    <div class="inner">
      <form method="post" action="<?php bloginfo('url'); ?>/search">
      <div class="unit-conditions" id="free" uk-grid>
        <div class="title uk-flex-center uk-width-1-5@m uk-text-center">
          <div class="uk-margin">
            <h2>キーワード検索</h2>
          </div>
        </div>
        <div class="selection uk-width-4-5@m" uk-grid>
          <div class="uk-margin">
              <input type="text" class="uk-input" name="free_word" placeholder="学校名、資格、地域名など">
              <button type="submit" class="uk-button uk-button-primary"><img src="<?php echo get_template_directory_uri(); ?>/img/mushimegane.png" /></button>
              <!-- <input type="image" src="<?php echo get_template_directory_uri(); ?>/img/mushimegane.png" name="button1" class="btn" alt="送信する"> -->
          </div>
          <!--
          <input type="text" name="s" class="search-text" placeholder="学校名、資格、地域名など"/><input type="image" src="<?php echo get_template_directory_uri(); ?>/img/mushimegane.png" name="button1" class="btn" alt="送信する">
          -->
        </div>
      </div>
      </form>
      <form method="post" action="<?php bloginfo('url'); ?>/search">
      <div class="unit-conditions" id="field" uk-grid>
        <div class="title uk-width-1-5@m uk-flex-center uk-text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img1.svg">
          <h2>分野で絞り込み</h2>
        </div>
        <div class="selection uk-grid-small uk-width-4-5@m" uk-grid>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="コンピューター・ゲーム">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img4.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="自動車・機械・電気">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img5.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="建築・土木・インテリア">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img6.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="理容・美容・メイク・エステ">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img7.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="調理・製菓・栄養">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img8.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="福祉・保育・教育">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img9.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="経理・秘書・不動産・医療事務・ビジネス">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img10.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="旅行・航空・ホテル・ブライダル">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img11.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="語学・外国語">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img12.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="音楽・デザイン・芸術">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img13.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="スポーツ・健康">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img14.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="公務員">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img15.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="ファッション">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img16.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="医療・看護・歯科・リハビリ">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img17.svg">
            </label>
          </div>
          <div class="uk-width-1-3@s uk-width-1-5@m">
            <label>
              <input type="checkbox" name="field_check[]" value="動物・農業・環境">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img18.svg">
            </label>
          </div>
        </div>
      </div>
      <div class="unit-conditions" id="area" uk-grid>
        <div class="title uk-flex-center uk-width-1-5@m uk-text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img2.svg">
          <h2>地区で絞り込み</h2>
        </div>
        <div class="selection uk-width-4-5@m" uk-grid>
          <div class="uk-width-1-4@s">
            <label>
              <input type="checkbox" name="area_check[]" value="福岡エリア">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img27-1.svg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img27-2.svg">
            </label>
          </div>
          <div class="uk-width-1-4@s">
            <label>
              <input type="checkbox" name="area_check[]" value="北九州エリア">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img28-1.svg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img28-2.svg">
            </label>
          </div>
          <div class="uk-width-1-4@s">
            <label>
                <input type="checkbox" name="area_check[]" value="筑後エリア">
                <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img29-1.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img29-2.svg">
              </label>
            </div>
          <div class="uk-width-1-4@s">
            <label>
              <input type="checkbox" name="area_check[]" value="筑豊エリア">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img30-1.svg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img30-2.svg">
            </label>
          </div>
        </div>
      </div>
      <div class="unit-conditions" id="support" uk-grid>
        <div class="title uk-flex-center uk-width-1-5@m uk-text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img3.svg">
          <h2>修学支援新制度<br>認定校</h2>
        </div>
        <div class="selection uk-width-4-5@m" uk-grid>
          <label><input class="uk-radio" type="radio" name="support_radio" value="1"> 認定あり</label>
          <label><input class="uk-radio" type="radio" name="support_radio" value="0"> 認定なし</label>
        </div>
      </div>
      <div class="unit-conditions" id="pro" uk-grid>
        <div class="title uk-flex-center uk-width-1-5@m uk-text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img3.svg">
          <h2>職業実践専門過程<br>認定校</h2>
        </div>
        <div class="selection uk-width-4-5@m" uk-grid>
          <label><input class="uk-radio" type="radio" name="pro_radio" value="1"> 認定あり</label>
          <label><input class="uk-radio" type="radio" name="pro_radio" value="0"> 認定なし</label>
        </div>
      </div>
      <div class="unit-conditions" id="international" uk-grid>
        <div class="title uk-flex-center uk-width-1-5@m uk-text-center">
          <h2>留学生受け入れ</h2>
        </div>
        <div class="selection uk-width-4-5@m" uk-grid>
          <label><input class="uk-radio" type="radio" name="international_radio" value="1"> あり</label>
          <label><input class="uk-radio" type="radio" name="international_radio" value="0"> なし</label>
        </div>
      </div>
      <div class="unit-conditions uk-flex-center uk-text-center uk-margin-bottom" uk-grid>
        <div><button type="submit" class="uk-button uk-button-primary">検索</button></div>
      </div>
      </form>
    </div>
  </div>
  <?php if (!empty($_POST)) : ?>
  <div class="unit-triangle">
    <div class="triangle"></div>
  </div>
  
  <div class="result">
    <div class="inner">
    <?php // カスタム投稿（schoolsearch取得）
      // 検索条件取得
      //$free_word = $_POST["free_word"];
      $field_check = isset($_POST["field_check"]) ? $_POST["field_check"] : 0;
      $area_check = isset($_POST["area_check"]) ? $_POST["area_check"] : 0;
      $cnt_area_check = isset($_POST["area_check"]) ? count($_POST["area_check"]) : 0;
      $support_radio = isset($_POST["support_radio"]) ? $_POST["support_radio"] : 9;
      $pro_radio = isset($_POST["pro_radio"]) ? $_POST["pro_radio"] : 9;
      $international_radio = isset($_POST["international_radio"]) ? $_POST["international_radio"] : 9;

      // クエリ作成
      $meta_query = array( 'relation' => 'AND' );
      // 分野
      if (!empty($field_check)) {
        if (count($field_check) > 1) {
          $meta_query_field_check = array( 'relation' => 'OR' );
          for ($i= 0; $i< count($field_check); $i++) {
            $meta_query_field_check[] = array( 'key' => '分野', 'value' => $field_check[$i], 'compare' => 'LIKE');
          }
          $meta_query[] = $meta_query_field_check;
        } else {
          $meta_query[] = array( 'key' => '分野', 'value' => $field_check[0], 'compare' => 'LIKE');
        }
      }
      // 地区
      if (!empty($area_check)) {
        if (count($area_check) > 1) {
          $meta_query_area_check = array( 'relation' => 'OR' );
          for ($i= 0; $i< count($area_check); $i++) {
            $meta_query_area_check[] = array( 'key' => '地区', 'value' => $area_check[$i], 'compare' => 'LIKE');
          }
          $meta_query[] = $meta_query_area_check;
        } else {
          $meta_query[] = array( 'key' => '地区', 'value' => $area_check[0], 'compare' => 'LIKE');
        }
      }
      // 修学支援新制度認定校
      $support_radio_value = "修学";
      if ($support_radio == 1) {
        $meta_query[] = array( 'key' => '認定校', 'value' => $support_radio_value, 'compare' => 'LIKE');
        } elseif ($support_radio == 0) {
          $meta_query[] = array( 'key' => '認定校', 'value' => $support_radio_value, 'compare' => 'NOT EXISTS');
          //$meta_query[] = array( 'key' => '認定校', 'value' => $support_radio_value, 'compare' => 'NOT LIKE');
      }
      // 職業実践専門過程認定校
      $pro_radio_value = "職業";
      if ($pro_radio == 1) {
        $meta_query[] = array( 'key' => '認定校', 'value' => $pro_radio_value, 'compare' => 'LIKE');
        } elseif ($pro_radio == 0) {
          $meta_query[] = array( 'key' => '認定校', 'value' => $pro_radio_value, 'compare' => 'NOT EXISTS');
      }
      // 留学生受け入れ
      if ($international_radio != 9) {
        $international_radio_value = $international_radio ? "あり" : "なし";
        $meta_query[] = array( 'key' => '留学生受け入れ', 'value' => $international_radio_value);
      };
      /* クエリデバッグ
      echo '<pre>';
      var_dump( $meta_query);
      echo '</pre>';
      */

      $args = array(
        'post_type' => 'schoolsearch',
        'posts_per_page' => -1,
        'meta_query' => $meta_query
      );

      // クエリ実行
      $search_query = new WP_Query( $args );
      
      // ループ処理開始
      if ( $search_query->have_posts() ) {
        while ( $search_query->have_posts() ) {
          $search_query->the_post();

          // 出力フィールドを取得
          $field = get_post_meta( get_the_ID(), '分野', true ); // 分野
          $address = get_post_meta( get_the_ID(), '所在地', true ); // 住所
          $tmp_nintei = get_post_meta( get_the_ID(), '認定校', true);
          $support = in_array("修学", (array)$tmp_nintei); // 修学支援新制度認定校
          $professional = in_array("職業", (array)$tmp_nintei); // 職業実践専門課程認定校
          $international = !empty(get_post_meta( get_the_ID(), '留学生受け入れ', true))  ?  get_post_meta( get_the_ID(), '留学生受け入れ', true) : 'なし'; // 留学生受け入れ
          //var_dump($field);
    ?>
    <div class="unit-result" uk-grid>
      <div class="uk-width-2-3@m" uk-grid>
        <div class="image-result uk-width-1-5@m">
          <?php if (has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'thumbnail' ); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img4.svg">
          <?php endif; ?>
        </div>
        <div class="data-result uk-width-4-5@m">
          <div class="label-result">
            <?php if ($support): ?><span class="uk-label support">修学支援新制度認定校</span><?php endif; ?>
            <?php if ($professional): ?><span class="uk-label professional">職業実践専門課程認定校</span><?php endif; ?>
          </div>
          <div class="name-result"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></div>
          <div class="address-result"><?php echo esc_html( $address ); ?></div>
          <div uk-grid>
            <div class="field-result uk-width-1-2@m">
              <span class="uk-label">分野</span>
              <?php if (!empty($field)): ?>
                <?php if (in_array("コンピューター・ゲーム", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img19.svg">
                <?php endif; ?>
                <?php if (in_array("自動車・機械・電気", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img20.svg">
                <?php endif; ?>
                <?php if (in_array("建築・土木・インテリア", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img21.svg">
                <?php endif; ?>
                <?php if (in_array("理容・美容・メイク・エステ", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img22.svg">
                <?php endif; ?>
                <?php if (in_array("調理・製菓・栄養", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img23.svg">
                <?php endif; ?>
                <?php if (in_array("福祉・保育・教育", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img36.svg">
                <?php endif; ?>
                <?php if (in_array("経理・秘書・不動産・医療事務・ビジネス", $field)) : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img37.svg">
                <?php endif; ?>
                <?php if (in_array("旅行・航空・ホテル・ブライダル", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img38.svg">
                <?php endif; ?>
                <?php if (in_array("語学・外国語", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img39.svg">
                <?php endif; ?>
                <?php if (in_array("音楽・デザイン・芸術", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img40.svg">
                <?php endif; ?>
                <?php if (in_array("スポーツ・健康", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img41.svg">
                <?php endif; ?>
                <?php if (in_array("公務員", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img42.svg">
                <?php endif; ?>
                <?php if (in_array("ファッション", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img43.svg">
                <?php endif; ?>
                <?php if (in_array("医療・看護・歯科・リハビリ", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img44.svg">
                <?php endif; ?>
                <?php if (in_array("動物・農業・環境", $field)) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img45.svg">
                <?php endif; ?>
              <?php endif; ?>
            </div>
            <div class="international-result uk-width-1-2@m">
              <span class="uk-label">留学生受け入れ</span>
              <span class="display-label"><?php echo esc_html( $international ); ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="link-result uk-grid-column-small uk-width-1-3@m" uk-grid>
        <div class="uk-width-1-3@m"><a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img24.svg"></a></div>
        <div class="uk-width-1-3@m"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img25.svg"></a></div>
        <div class="uk-width-1-3@m"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/search/ss-img26.svg"></a></div>
      </div>
    </div>
    <?php // ループ処理終了
        }
      }
      wp_reset_postdata();
    ?>
    </div>
  </div>
  <?php endif; ?>
</div>
<?php get_footer(); ?>