<?php get_template_part('templates/head'); ?>

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include theme_template_path(); ?>
      </main><!-- /.main -->
      <?php if (bd_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include theme_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>