<?php

get_header(); ?>

  <main>
    <section class="site-blog">
      <div class="wrapper">

        <div class="tiles">
          <header class="block-header">
            <h1 class="headline"><?php the_archive_title(); ?></h1>
          </header>
          <div class="tiles__list">
            <?php while(have_posts()) {
              the_post(); ?>
              <div class="tiles__item">
                <div class="tiles__text">
                  <div class="tiles__text-inner">
                    <h3 class="headline">
                      <a class="tiles__link" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </h3>
                    <p>
                      <?php if(has_excerpt()) {
                        echo get_the_excerpt();
                      } else {
                        echo esc_html(wp_trim_words(get_the_content(), 18));
                      } ?>
                    </p>
                    <a class="tiles__button" href="<?php the_permalink(); ?>">Lees verder</a>

                    <p class="tiles__tags"><?php the_tags( '<span>Verwant:</span> ',' ' ); ?></p>
                  </div>
                </div>

                <div class="tiles__photo" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">&nbsp;</div>

              </div>
            <?php } ?>
          </div>
        </div>

        <?php echo paginate_links(); ?>

      </div>
    </section>
  </main>

  <?php

get_footer(); ?>
