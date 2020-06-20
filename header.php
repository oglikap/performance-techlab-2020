<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
      <div class="site-header__wrap  <?php if(!is_front_page()) echo 'site-header__wrap--border' ?>">
        <div class="wrapper">

          <div class="site-header__content">
            <div class="site-header__logo">
              <a class="site-header__logo-link" href="<?php echo esc_url(site_url()); ?>">
                <svg class="site-header__icon-location">
                  <use xlink:href="<?php echo esc_url(get_theme_file_uri('/assets/images/sprite.svg#icon-PLT_logo_voluit_met_vierkant')); ?>"></use>
                </svg>
              </a>
            </div>

            <div class="primary-nav">
              <div class="primary-nav__inner">
                <ul class="primary-nav__list">
                  <li class="primary-nav__item">
                    <span class="search__icon" uk-icon="icon: search; ratio: 2"></a>
                  </li>
                  <li class="primary-nav__item">
                    <a class="primary-nav__link" href="<?php echo esc_url(site_url('agenda')); ?>">
                      <div class="bs-hooks-square bs-hooks-square--small">
                        <span class="bs-hooks-square__text">
                          Age<br />nda
                        </span>
                      </div>
                    </a>
                  </li>
                  <li class="primary-nav__item">
                    <a class="primary-nav__link" href="<?php echo esc_url(site_url('meedoen')); ?>">
                      <div class="bs-hooks-square bs-hooks-square--small bs-hooks-square--red">
                        <span class="bs-hooks-square__text">
                          Doe<br />mee
                        </span>
                    </div>
                    </a>
                  </li>


                  <li class="primary-nav__item">
                    <div class="site-header__menu-icon">
                      <div class="site-header__menu-icon__middle"></div>
                    </div>
                  </li>
                </ul>

              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="site-header__menu-content">
        <nav class="secondary-nav">
          <ul>
            <li><a href="#our-beginning">Lab #5 | Juli 2020</a></li>
            <li><a href="#features">Lab #4 | 21 t/m 27 januari 2020</a></li>
            <li><a href="#testimonials">Lab #3</a></li>
          </ul>
        </nav>
      </div>

      <?php if (is_front_page()) { ?>

      <div class="bs-hero">
        <div class="wrapper">
          <div class="bs-hero__text">
            <div class="bs-hero__text-inner">
              <div class="generic-content-container">

                <?php while( have_rows('alineas') ) {
                  the_row(); ?>
                  <h4 class="headline headline--small"><?php the_sub_field('title'); ?></h4>
                  <p>
                    <?php the_sub_field('content'); ?>
                  </p>
                <?php } ?>

              </div>
            </div>
          </div>
        </div><!-- .wrapper -->

        <div class="bs-hero__button">
          <a href="<?php echo esc_url(site_url('labs')); ?>" class="bs-hero__button-link">
            <div class="bs-hooks-square bs-hooks-square--medium">
              <span class="bs-hero__button-text">
                Wat dan?
              </span>
            </div>
          </a>
        </div>
      </div><!-- .bs-hero -->

      <?php } ?>

    </header>
