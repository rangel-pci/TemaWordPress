<?php get_header(); ?>
      <!-- conteúdo -->
      <div class="row">
        <!-- posts -->
        <div class="col-md-8 col-sm-12">
          <main>

            <?php if(have_posts()) : while(have_posts()) :the_post(); ?>
            <!-- chama os posts -->
            <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile; ?>

            <?php else : get_404_template(); endif;?>

          </main>

          <div class="blog-pagination text-center mb-5">
            <?php previous_posts_link("<span class='carousel-control-prev-icon'></span> Voltar"); ?>
            <?php next_posts_link("Próximo <span class='carousel-control-next-icon'></span>"); ?>
          </div>

        </div>
      <?php get_sidebar(); ?> 

      </div>
    </div>

<?php get_footer(); ?>