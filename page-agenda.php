<?php
// Template Name: Agenda

get_header();

while(have_posts()) {
  the_post();
  ?>

  <section class="agenda">

    <div class="wrapper">

      <main>

        <?php if( have_rows( 'agenda_content' ) ): ?>

          <div class="page-content">

            <header class="block-header">
              <h2 class="headline">
                <?php the_title(); ?>
              </h2>
            </header>

          <?php while( have_rows( 'agenda_content' ) ): the_row(); ?>

            <div class="agenda__item">

              <div class="agenda__text">
                <div class="agenda__header">

                  <div class="agenda__header-content">
                    LAB
                    <div class="bs-hooks-square bs-hooks-square--small">
                      <span class="bs-hooks-square__text">
                        <?php the_sub_field('header'); ?>
                      </span>
                    </div>
                  </div>

                  <div class="agenda__when">
                    <?php the_sub_field('when'); ?>
                  </div>

                  <div class="agenda__where">
                    <?php the_sub_field('where'); ?>
                  </div>

                </div>

                <?php the_sub_field( 'content_agenda' ); ?>
              </div>

              <div class="agenda__photo" style="background-image: url(<?php if( get_sub_field('image') ): the_sub_field('image'); endif; ?>)">
                &nbsp;
              </div>
            </div>

          <?php endwhile; ?>

          </div>

        <?php endif; ?>

        <?php
        $theParent = wp_get_post_parent_id(get_the_ID());
        if( $theParent ) {
          $findChildrenOf = $theParent;
        } else {
          $findChildrenOf = get_the_ID();
        }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'exclude' => 574
          ));

           ?>

      </main>

    </div>
  </section>


  <?php }

get_footer(); ?>
