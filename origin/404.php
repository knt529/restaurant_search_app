<?php get_header(); ?>
<meta name="robots" content="noindex,nofollow">

<div class="noPageWrap">
  <div class="txtBox">
    <!-- <p class="headTxt">404</p> -->
    <p class="txt">アクセスしようとしたページが見つかりません。<br>URLが間違っているか、ページが削除された可能性があります。</p>
  </div>
  <div class="btnBox">
    <a class="topBtn" href="<?php echo home_url(); ?>">TOPへ戻る</a>
  </div>
</div>

<style media="screen">
.txtBox{
  margin: 80px auto;
}
.headTxt{
  font-size: 30px;
  text-align: center;
  font-weight: 700;
}
.txt{
  margin-top: 40px;
  line-height: 1.5;
  text-align: center;
}
.btnBox{
  margin-bottom: 50px;
}
.topBtn{
  width: 200px;
  display: block;
  margin: auto;
  border: 1px solid #000;
  border-radius: 5px;
  padding: 10px 0;
  text-align: center;
  color: #fff;
  background-color: #000;
  transition: .3s;
}
.topBtn:hover{
  background: #fff;
  color: #000;
}
</style>

<?php get_footer(); ?>
