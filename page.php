<?php get_header(); ?>
      <!-- conteúdo -->
      <div class="row">
        <!-- posts -->
        <div class="col-md-8 col-sm-12">
          <main>

            <?php if(have_posts()) : while(have_posts()) :the_post(); ?>

              <h1 class="h2 mb-3 pb-2"><?php the_title(); ?></h1>
              
              <?php the_content(); ?>

            <?php endwhile; ?>

            <?php else : get_404_template(); endif;?>

          </main>

        </div>
      <?php get_sidebar(); ?> 

      </div>
    </div>

<?php get_footer(); ?>