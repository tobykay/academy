   <aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
  <div class="grid_4 ">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
    </div>
</ul>
</div>
<?php endif; ?>
</aside>
    