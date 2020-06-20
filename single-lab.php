<?php

get_header();


while(have_posts()) {
  the_post(); ?>
  <section class="site-page page-section">
    <main>
      <div class="wrapper">
        <div class="tiles tiles-large">
          <header class="block-header">
            <nav class="block-header__nav">
                <a class="block-header__link" href="<?php echo esc_url(site_url('/labs')) ?>">Terug naar Labs</a><span uk-icon="lifesaver"></span>
            </nav>
            <h2 class="headline"><?php the_title(); ?></h2>
          </header>
          <div class="tiles__list">
            <div class="tiles__item tiles-large__item">
              <?php if(get_field('video')) { ?>
                <div class="tiles-large__video">
                  <?php the_field('video'); ?>
                </div>
              <?php } else { ?>
                <div class="tiles__photo tiles-large__photo">
                  &nbsp;
                </div>
              <?php } ?>
              <div class="tiles__text tiles-large__text">
                <div class="tiles__text-inner tiles-large__text-inner">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </section>
<?php }

get_footer();

 ?>
