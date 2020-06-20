<?php

get_header();

while(have_posts()) {
  the_post();
  ?>

  <section class="site-page">
    <main>
      <div class="wrapper">
        <?php the_content(); ?>
      </div>
    </main>
  </section>


  <?php }

get_footer(); ?>
