<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/requestdocument.css" type="text/css">

</head>

<body>
<div class="container">

<header>
<?php get_template_part("nav"); ?>
</header>




<div class="content">
  <div class="main">

    <div class="e-m-img"><img src="<?php echo get_template_directory_uri(); ?>/img/header-request.png" alt="" class="img-onoff"><img src="<?php echo get_template_directory_uri(); ?>/img/header-request-sp.png" alt="" class="img-onoff-sp"></div>
    <div class="rd-m-sec">
      <h2>まだ資料請求先の学校が登録されていません</h2>
      <div class="rd-m-list">
        <ul>
          <li>
            <dl>
              <dt>STEP<span>1</span></dt>
              <dd>学校検索ページから気になる学校を探して、</dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>STEP<span>2</span></dt>
              <dd>検索結果の　ボタンから、学校の詳細情報をチェック</dd>
            </dl>
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>