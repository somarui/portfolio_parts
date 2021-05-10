<footer class="footer">
  <div class="fo-title">
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-img1moji.svg" alt=""></a>
  </div>
</footer>

</div>
</body>
</html>
</div>

<?php wp_footer(); ?>
</body>
</html>


<script>
  //スライドショー
  $(function() {
$('.autoplay').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 2000,
  dots:false,
  arrows:false,

responsive: [{
    
breakpoint: 725,
settings: {
}

}, {
breakpoint: 300,
settings: "unslick" // slickを削除
}]
});
});
</script>

<!-- ハンバーガーメニュー：クリック表示非表示 -->
<script type="text/javascript"> 
  $(function() {
  　$('.hb-navbtn').click(function() {
  　　$(this).toggleClass('active');
  
  　if ($(this).hasClass('active')) {
  　　$('.hb-menu').addClass('active');　 //トグルボタンが押された時クラスを付与
  　} else {
  　　$('.hb-menu').removeClass('active'); //クラスを外す
  　}
  　});
  });
  </script>

