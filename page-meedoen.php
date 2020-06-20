<?php

get_header();

while(have_posts()) {
  the_post();
  ?>

  <section class="site-page">
    <main>
      <div class="bs-contact" id="ptl-involve">

        <div class="wrapper">
          <?php echo do_shortcode( '[contact-form-7 id="129" title="Contactformulier 1"]' ); ?>
        </div>

      </div>
    </main>
  </section>


  <?php }

get_footer(); ?>
