<?php wp_footer(); ?>
  </main>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <button id="scrollButton" onclick="scrollToFirstShop()" title="最初の店舗情報にスクロール">
      <img src="<?php echo get_template_directory_uri(); ?>/add/img/top_link.png" alt="">
    </button> 
  </footer><!-- #colophon -->


  <!-- jsファイルの読み込み -->
  <script src="<?php echo get_template_directory_uri(); ?>/add/js/callApi.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/add/js/searchLocation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/add/js/searchKeyword.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/add/js/test.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/add/js/scroll.js"></script>
 </body>
</html>
