<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/greeting
.css" type="text/css">
</head>

<body>
<div class="container">

<header>
  <?php get_template_part("nav"); ?>
</header>





<div class="content">

<div class="gr-headertitle"><img src="<?php echo get_template_directory_uri(); ?>/img/header-greeting.png" alt=""></div>

  <div class="main">

    <div class="gr-mainblock1">
      <div class="gr-maintitle">
        <p>ごあいさつ</p>
        <p>Greeting</p>
      </div>
      <div class="gr-mainsec gr-mainsec1">
        <h2><span>福岡県知事　</span><div class="br-onoff"><br></div>小川　洋</h2>
        <div class="gr-mainsec1img"><img src="<?php echo get_template_directory_uri(); ?>/img/gr-img1.jpg" alt=""></div>
        <p>
          「人生１００年時代」の到来、情報通信技術の革新に伴う第４次産業革命の進展など、今日の社会は大きな変化に直面しています。新型コロナウイルス感染症の感染拡大もまた、社会の変革に大きく拍車をかけました。
        　専門的な知識や技術を持った即戦力となる人材が求められる中、社会の多種多様なニーズに即応した実践的な職業教育や、質の高い専門的な技術教育を行う専門学校の役割はますます重要になっています。これまで専門学校で学んだ多くの卒業生の皆さんも、社会のさまざまな分野で活躍されています。
        　この２０２２年度版「福岡県専門学校案内」は、県内の専門学校の情報が詳しく紹介されています。本書が専門学校を選択する際の一助となれば幸甚です。
        　令和２年４月からは、「高等教育の修学支援新制度」が実施されています。この制度は、学ぶ意欲のある生徒の皆さんが、経済的な理由で大学や専門学校などへの進学を断念することがないよう支援するものです。新型コロナウイルス感染症の影響等による収入減にも柔軟に対応するなど、家庭の経済状況にかかわらず、より多くの生徒の皆さんが、専門学校で安心して学ぶ機会を得られるものと期待しています。
        　最後に、多くの皆さんが、学びたいという気持ちを大切にされ、将来の夢を実現されることを祈念し、あいさつといたします。
        </p>
      </div>
    </div>

    <a class="m-i-btn-a" href="<?php bloginfo('url') ;?>">
        <div class="m-i-btn">
          <!-- <img src="img/main-info-title2.png" alt=""> -->
          <p class="m-i-btn-p">トップへ戻る</p>
        </div>
    </a>


  </div>
</div>

<?php get_footer(); ?>