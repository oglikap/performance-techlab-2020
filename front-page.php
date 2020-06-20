<?php get_header(); ?>

<div class="site-home">
  <main>
    <section class="site-home-about page-section padding-remove-top">
      <div class="wrapper">
        <div class="site-home-about__wrapper">
          <div class="site-home-about__item line-vertical-right">
            <div class="site-home-about__text-inner">
              <div class="generic-content-container">
                <h3 class="headline">Waarom</h3>
                <p>Steeds meer theatermakers spelen op het podium met de visuele en technologische cultuur van nu en gebruiken daarvoor nieuwe en oude technologie.</p>

                <p>Die technologie kan op het podium alleen betekenis krijgen als die vanaf de conceptfase betrokken wordt in de ontwikkeling. Het Performance Technology Lab geeft makers die ruimte.</p>

                <p>Technologiebedrijven en ontwikkelaars hebben behoefte aan de verbeelding en creativiteit van kunstenaars. In het Performance Technology Lab testen ze samen nieuwe apparatuur, ontdekken andere artistieke en functionele effecten en ontwikkelen nieuwe toepassingen.</p>
              </div>
            </div>
          </div>

          <div class="site-home-about__item line-vertical-right">
            <div class="site-home-about__text-inner">
              <div class="generic-content-container">
                <h3 class="headline">Hoe</h3>
                <p>Het Performance Technology Lab organiseert werkplaatsen. Het is een nomadische studio. Iedere werkplaats is anders. Per editie bundelen we een aantal makers. Rond hun artistieke concepten halen we de benodigde technologie en kennis in huis, en creëren we de omgeving om samen uit te vinden en te experimenteren.</p>

                <p>Het Performance Technology Lab is ook een online netwerk van makers, technische ontwikkelaars, designers, vormgevers en uitvinders, waar artistiek en technologisch inzicht gedeeld wordt en mensen elkaar kunnen vinden voor nieuwe projecten.</p>
              </div>
            </div>
          </div>

          <div class="site-home-about__item">
            <div class="site-home-about__text-inner">
              <div class="generic-content-container">
                <h3 class="headline">Wie</h3>
                <p>Of je nou wilt werken met camera’s, met live cinema, interactief licht en geluid, videomapping, videomixers, of dat je wilt experimenteren met algoritmes, robots en virtual worlds – alles kan.</p>

                <p>Alle disciplines zijn welkom, alle makers zijn welkom. Iedere podiumkunstenaar die wil werken met technologie kan aankloppen.</p>

                <p><strong>Doe mee</strong><br>
                <a href="#">Meld je aan. Stel je vraag. Schets het concept.</a>
                Wij bekijken wat nodig is voor een goed experiment</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <?php
    $nextlabQuery = new WP_Query(array(
      'post_type' => 'edition',
      'posts_per_page' => 1
    ));

    if($nextlabQuery->have_posts()) {
      ?>
      <section class="next-lab page-section">
        <div class="wrapper">
          <?php while ($nextlabQuery->have_posts()) {
            $nextlabQuery->the_post(); ?>

            <div class="tiles tiles-large margin-remove">
              <header class="block-header">
                <div class="headline"><?php the_field('lab_datum'); ?></div>
              </header>
              <div class="tiles__list">
                <div class="tiles__item tiles-large__item">
                  <div class="tiles__text">
                    <div class="tiles__text-inner tiles-large__text-inner">
                      <h3 class="headline">

                        <div class="headline headline--large">
                          LAB
                          <div class="bs-hooks-square bs-hooks-square--small">
                            <span class="bs-hooks-square__text bs-hooks-square__text--large">
                              <?php the_field('number'); ?>
                            </span>
                          </div>
                        </div>
                      </h3>
                      <span class="headline"><?php the_field('lab_titel'); ?></span>
                      <span class="headline headline--small"><?php the_field('lab_datum'); ?></span>
                      <span class="headline"><?php the_field('lab_locatie') ?></span>
                      <?php if( get_field('lab_tekst') ): ?>
                        <p>
                          <?php the_field('lab_tekst'); ?>
                        </p>
                      <?php endif; ?>
                      <br>
                      <a class="tiles__button margin-top" href="<?php the_permalink(); ?>">Lees verder</a>

                      <p class="tiles__tags"><?php the_tags( '<span>Verwant:</span> ',' ' ); ?></p>
                    </div>
                  </div>

                  <div class="tiles__photo" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">&nbsp;</div>

                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </section>
    <?php } ?>



    <section class="logo-area page-section">
      <div class="wrapper">
        <div class="logo-area__wrapper">
          <div class="logo-area__partners line-vertical-right">
            <h4 class="headline headline--small">Founding partners</h4>
            <ul class="logos__list">
              <li class="logos__item">
                <a class="logos__link" href="//feikeshuis.nl" target="_blank">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo-feike-trans.png')) ?>" alt="Logo Feikes Huis">
                </a>
              </li>
              <li class="logos__item">
                <a class="logos__link" href="//overhetij.nl/" target="_blank">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/overij.png')); ?>" alt="logo over het ij">
                </a>
              </li>
              <li class="logos__item">
                <a class="logos__link" href="//likeminds.nl/" target="_blank">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/likeminds-logo.png')); ?>" alt="">
                </a>
              </li>
              <li class="logos__item">
                <a class="logos__link" href="//cinedans.nl/" target="_blank">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/cinedanslab.png')); ?>" alt="Logo Cinedans Lab">
                </a>
              </li>
              <li class="logos__item">
                <a class="logos__link" href="//dansmakers.nl/" target="_blank">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/dansmakers.png')); ?>" alt="Logo dansmakers">
                </a>
              </li>
            </ul>
          </div>

          <div class="logo-area__powered">
            <h4 class="headline headline--small">Powered by/Met steun van:</h4>
            <ul class="logos__list">
              <li class="logos__item">
                <a class="logos__link" href="//cultuurfonds.nl" target="_blank">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/bernhard-logo.png')); ?>" alt="Cultuurfonds logo">
                </a>
              </li>
              <li class="logos__item">
                <a class="logos__link" href="//den.nl" target="_blank">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/den-logo.png')); ?>" alt="Logo DEN">
                </a>
              </li>
              <li class="logos__item">
                <a class="logos__link" href="//beamsystems.nl" target="_blank">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/166-002 BeamSystems_Logo_Staand_Zwart.png')); ?>" alt="Beamsystems logo">
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>
