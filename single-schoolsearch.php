<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/schoolsearch.css" type="text/css">
</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>



<div class="content">
  <!-- ヘッダー変更： get_field();.-->

<div class="ss-headertitle" style="background-image:url(<?php the_field('ヘッダー画像'); ?>);"></div>

  <div class="main">

    <div class="ss-mainblock">

      <div class="ss-maintitle">
        <div class="ss-schoolname">
          <span class="ss-schoolname-span"><?php echo get_post_meta($post->ID, '学校名_サブ', true); ?><br></span>
          <?php echo get_post_meta($post->ID, '学校名_メイン', true); ?>
        </div>
        <div class="schoollabellist">
        
        <?php
          $ninteiko = get_field('認定校');
          if( $ninteiko && in_array('修学', $ninteiko ) ) {
        ?>
            <div class="schoollabel ss-schoollabel1">修学支援新制度認定校</div>
        <?php
          }
          if ( $ninteiko && in_array('職業', $ninteiko ) ) {
            ?>
            <div class="schoollabel ss-schoollabel2">職業実践専門課程認定校</div>
          <?php } ?>
        </div>
      </div>

      <div class="ss-mainsec ss-mainsec1">
        <h2>学校の特色</h2>
        <?php echo get_post_meta($post->ID, '学校の特色', true); ?>
      </div>

      <div class="ss-mainsec ss-mainsec2">
        <h2>その他概要</h2>
        <ul>
          <li>
            <span class="ss-flametitle">教員数</span>
            <br class="br-onoff">
            <?php echo get_post_meta($post->ID, '教員数', true); ?>
          </li>
          <li>
            <span class="ss-flametitle">取得可能な資格</span>
            <br class="br-onoff">
            <?php echo get_post_meta($post->ID, '取得可能な資格', true); ?>
          </li>
          <li>
            <span class="ss-flametitle">就職・進学</span>
            <br class="br-onoff">
              <ul class="ss-inline-ul">
                <li><span class="ss-flametitle-sub">指導内容</span><br>
                <?php echo get_post_meta($post->ID, '指導内容', true); ?>
                </li>
                <br class="br-onoff">
                <li><span class="ss-flametitle-sub">実績内容</span><br>
                <?php echo get_post_meta($post->ID, '実績内容', true); ?>
                </li>
              </ul>
          </li>
          <li>
            <span class="ss-flametitle">学費サポート</span>
            <br class="br-onoff">
            <?php echo get_post_meta($post->ID, '学費サポート', true); ?>
          </li>
        </ul>
      </div>


      <div class="ss-mainsec table-1">
        <h2>学科・コース／学費（<?php echo get_post_meta($post->ID, '年度', true); ?>年度）</h2>
        
        <?php the_content(); ?>

      <div>


    <div class="ss-mainsec table-2 mt-3rem">
      <h2>募集要項</h2>
        </div>
        <div class="mt-1rem">
          <div class="table-title fs-12 pd-5">
            <i class="fa fa-star fs-18"></i><span class="ss-item">願</span>…願書受付　<span class="ss-item">選</span>…選考方法　<span class="ss-item">料</span>…選考料　<span class="ss-item">エ</span>…エントリー
          </div>
          <table>
            <thead>
              <tr>
                <th>推薦入試</th>
                <th>一般入試</th>
                <th>AO入試</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="ss-item-in">願</span><?php the_field('推薦願書受付_前')?> 〜 <?php the_field('推薦願書受付_後')?>必着</td>
                <td><span class="ss-item-in">願</span><?php the_field('一般願書受付_前')?> 〜 <?php the_field('一般願書受付_後')?>必着</td>
                <td><span class="ss-item-in">願</span><?php the_field('AO願書受付_前')?> 〜 <?php the_field('AO願書受付_後')?>必着</td>
              </tr>
              <tr>
                <td><span class="ss-item-in">選</span><?php echo get_post_meta($post->ID, '推薦選考内容', true); ?></td>
                <td><span class="ss-item-in">選</span><?php echo get_post_meta($post->ID, '一般選考内容', true); ?></td>
                <td><span class="ss-item-in">選</span><?php echo get_post_meta($post->ID, 'AO選考内容', true); ?></td>
              </tr>
              <tr>
                <td><span class="ss-item-in">料</span><?php echo get_post_meta($post->ID, '推薦選考料', true); ?>円</td>
                <td><span class="ss-item-in">料</span><?php echo get_post_meta($post->ID, '一般選考料', true); ?>円</td>
                <td><span class="ss-item-in">料</span><?php echo get_post_meta($post->ID, 'AO選考料', true); ?>円</td>
              </tr>              </tr>
              <tr>
                <td><span class="ss-item-in">エ</span><?php the_field('推薦エントリー_前')?> 〜 <?php the_field('推薦エントリー_後')?></td>
                <td><span class="ss-item-in">エ</span><?php the_field('一般エントリー_前')?> 〜 <?php the_field('一般エントリー_後')?></td>
                <td><span class="ss-item-in">エ</span><?php the_field('AOエントリー_前')?> 〜 <?php the_field('AOエントリー_後')?></td>
              </tr>

            </tbody>
          </table>
          
        <div class="ss-mainsec ss-mainsectxt">
          <h3>学科・コース／学費　募集要項の特記事項</h3>
          <div class="ss-textarea"><?php echo nl2br(get_post_meta($post->ID, '特記事項', true)); ?></div>
        </div>

      </div>



        </div>
      </div>






        <div class="ss-mainsec table-3 mt-3rem">
          <h2>卒業・就職・進学者数</h2>
          <div class="flex mt-1rem">
            <div class="sub-table mr-1rem">
              <table>
                <thead>
                  <tr>
                    <th class="wd-40"></th>
                    <th><?php echo get_post_meta($post->ID, '年度_前', true); ?>年度</th>
                    <th><?php echo get_post_meta($post->ID, '年度_後', true); ?>年度</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>卒業者数</td>
                    <td><?php echo get_post_meta($post->ID, '卒業者数２０１９', true); ?></td>
                    <td><?php echo get_post_meta($post->ID, '卒業者数２０２０', true); ?></td>
                  </tr>
                  <tr>
                    <td>就職希望者数</td>
                    <td><?php echo get_post_meta($post->ID, '就職希望者数２０１９', true); ?></td>
                    <td><?php echo get_post_meta($post->ID, '就職希望者数２０２０', true); ?></td>
                  </tr>
                  <tr>
                    <td>関連職種就職者数</td>
                    <td><?php echo get_post_meta($post->ID, '関連職種就職者数２０１９', true); ?></td>
                    <td><?php echo get_post_meta($post->ID, '関連職種就職者数２０２０', true); ?></td>
                  </tr>
                  <tr>
                    <td>関連職種アルバイト者数</td>
                    <td><?php echo get_post_meta($post->ID, '関連職種アルバイト者数２０１９', true); ?></td>
                    <td><?php echo get_post_meta($post->ID, '関連職種アルバイト者数２０２０', true); ?></td>
                  </tr>
                  <tr>
                    <td>進学者数</td>
                    <td><?php echo get_post_meta($post->ID, '進学者数２０１９', true); ?></td>
                    <td><?php echo get_post_meta($post->ID, '進学者数２０２０', true); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="sub-table">
              <table>
                <thead>
                  <tr>
                    <th class="wd-40"></th>
                    <th><?php echo get_post_meta($post->ID, '年度_前', true); ?>年度</th>
                    <th><?php echo get_post_meta($post->ID, '年度_後', true); ?>年度</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>卒業者数</td>
                    <td><?php echo get_post_meta($post->ID, '公務員卒業者数２０１９', true); ?></td>
                    <td><?php echo get_post_meta($post->ID, '公務員卒業者数２０２０', true); ?></td>
                  </tr>
                  <tr>
                    <td>公務員試験受験者数</td>
                    <td><?php echo get_post_meta($post->ID, '公務員試験受験者数２０１９', true); ?></td>
                    <td><?php echo get_post_meta($post->ID, '公務員試験受験者数２０２０', true); ?></td>

                  </tr>
                  <tr>
                    <td>公務員試験<br>一般試験合格者数</td>
                    <td><?php echo get_post_meta($post->ID, '公務員試験１次試験合格者数２０１９', true); ?></td>
                    <td><?php echo get_post_meta($post->ID, '公務員試験１次試験合格者数２０２０', true); ?></td>
                  </tr>
                  <tr>
                    <td>公務員<br>最終合格者数</td>
                    <td><?php echo get_post_meta($post->ID, '公務員試験最終合格者数２０１９', true); ?></td>
                    <td><?php echo get_post_meta($post->ID, '公務員試験最終合格者数２０２０', true); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>





      <div class="ss-mainsec ss-mainsec6">
        <h2>お問い合わせ・アクセス</h2>
        <ul>
          <li>
            <span class="ss-flametitle">所在地</span>
            <br class="br-onoff">
            <?php echo get_post_meta($post->ID, '所在地', true); ?>
          </li>
          <li>
            <span class="ss-flametitle">TEL</span>
            <br class="br-onoff">
            <?php echo get_post_meta($post->ID, 'TEL', true); ?>
          </li>
          <li>
            <span class="ss-flametitle">FAX</span>
            <br class="br-onoff">
            <?php echo get_post_meta($post->ID, 'FAX', true); ?>
          <li>
            <span class="ss-flametitle">メールアドレス</span>
            <br class="br-onoff">
            <?php echo get_post_meta($post->ID, 'メールアドレス', true); ?>
          <li>
            <span class="ss-flametitle">URL</span>
            <br class="br-onoff">
            <a href="<?php the_field('URL'); ?>"><?php echo get_post_meta($post->ID, 'URL', true); ?></a>
          </li>
        </ul>
      </div>
      
    </div>


    <div class="ss-backbtn">
      <a href="<?php bloginfo('url') ;?>/search">戻る</a>
    </div>

    <div class="ss-btnlist">
    <div class="ss-backbtn ss-btn1">
      <a href="<?php the_field('電子パンフレットURL'); ?>">
        <img class="ss-btn-img" src="<?php echo get_template_directory_uri(); ?>/img/ss-iconbook.svg" alt="">
        <p class="ss-btn-p">電子パンフレット<br class="br-onoff">を見る</p>
      </a>
    </div>
    <div class="ss-backbtn ss-btn2">
      <a href="<?php bloginfo('url') ;?>/eventlist">
        <img class="ss-btn-img" src="<?php echo get_template_directory_uri(); ?>/img/ss-iconflag.svg" alt="">
        <p class="ss-btn-p">学校イベント<br class="br-onoff">情報</p>
      </a>
    </div>
    <div class="ss-backbtn ss-btn3">
      <a href="<?php bloginfo('url') ;?>/guidance">
        <img class="ss-btn-img" src="<?php echo get_template_directory_uri(); ?>/img/ss-iconnote.svg" alt="">
        <p class="ss-btn-p">学校資料一括請求<br class="br-onoff">に追加</p>
        </a>
    </div>
  </div>


  </div>


</div>

<?php get_footer(); ?>