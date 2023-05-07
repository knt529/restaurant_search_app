<div class="breadcrumb">
  <span><a href="<?php echo home_url(); ?>" class="opa c_gray02">ホーム</a></span>
  <?php if (is_page('time_machine') || is_page('web_marketing') || is_page('system_development')): ?>
    <span class="c_light_gray">/</span>
    <span class="c_gray02">事業内容</span>
  <?php elseif (is_page('employees') || is_page('requirements') || is_singular('requirements_ditail') ||  is_page('casual_interview') || is_singular('employee')): ?>
    <span class="c_light_gray">/</span>
    <span class="c_gray02">採用情報</span>
  <?php elseif (is_page('company') || is_page('member') || is_page('about') || is_page('comming_soon') ): ?>
    <span class="c_light_gray">/</span>
    <span class="c_gray02">会社情報</span>
  <?php endif; ?>
  <?php if (is_singular('requirements_ditail')): ?>
    <span class="c_light_gray">/</span>
    <span><a href="<?php echo home_url(); ?>/requirements" class="opa c_gray02">募集要項</a></span>
  <?php elseif (is_singular('news')|| is_tax('category_list')): ?>
    <span class="c_light_gray">/</span>
    <span><a href="<?php echo home_url(); ?>/news_list" class="opa c_gray02">お知らせ</a></span>
  <?php elseif (is_singular('employee')): ?>
    <span class="c_light_gray">/</span>
    <span><a href="<?php echo home_url(); ?>/employees" class="opa c_gray02">社員紹介</a></span>
  <?php endif; ?>
  <?php if (is_tax('category_list')): ?>
  <?php else: ?>
    <span class="c_light_gray">/</span>
    <span class=""><?php the_title(); ?></span>
  <?php endif; ?>
</div>
