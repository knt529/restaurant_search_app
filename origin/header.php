<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <?php $template_uri = get_template_directory_uri(); ?>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <!-- 共通cssの読み込み -->
  <link rel="stylesheet" href="<?php echo $template_uri; ?>/add/css/base.css">
  <link rel="stylesheet" href="<?php echo $template_uri; ?>/add/css/fonts.css">
  <link rel="stylesheet" href="<?php echo $template_uri; ?>/add/css/common.css">
  <link rel="stylesheet" href="<?php echo $template_uri; ?>/add/css/header.css">
  <link rel="stylesheet" href="<?php echo $template_uri; ?>/add/css/footer.css">

  <?php if (is_front_page()) : ?>
    <link rel="stylesheet" href="<?php echo $template_uri; ?>/add/css/front.css">
    <link rel="stylesheet" href="<?php echo $template_uri; ?>/add/css/conditions.css">
    <link rel="stylesheet" href="<?php echo $template_uri; ?>/add/css/result.css">
  <?php elseif (is_page('')) : ?>
  <?php endif; ?>

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js" 
  loading="lazy"></script>
  <?php wp_head(); ?>
</head>

<body>
  <header id="header" class="header flex align_ctr">
    <div class="left_box flex align_ctr">
      <div class="logo_img">
        <h2 class="logo f28 robot">
          Restaurant Searcher
        </h2>
      </div>
    </div> 
  </header>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
  (function($) {
    var $nav   = $('#navArea');
    var $btn   = $('.toggle_btn');
    var $mask  = $('#mask');
    var open   = 'open'; // class
    // menu open close
    $btn.on( 'click', function() {
      if ( ! $nav.hasClass( open ) ) {
        $nav.addClass( open );
      } else {
        $nav.removeClass( open );
      }
    });
    // mask close
    $mask.on('click', function() {
      $nav.removeClass( open );
    });
  } )(jQuery);
  </script>
  <main>
