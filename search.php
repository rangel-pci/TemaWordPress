<?php get_header(); ?>
      <!-- conteúdo -->
      <div class="row">
        <!-- posts -->
        <div class="col-md-8 col-sm-12">
          <main>
            <!-- Se houver resultados exibe o conteúdo, se não exibe um formulário de buscas -->
            <?php if(is_search()): ?>
            <?php
              $total_results = $wp_query->found_posts;

              echo "<h3 class='mb-3'>".sprintf(__('%s resultado(s) para "%s"', 'BS 4 + WP'),
                $total_results, get_search_query())."</h3>";

            endif;
            ?>

            <?php if(have_posts()) : while(have_posts()) :the_post(); ?>
              <!-- chama os posts -->
              <?php get_template_part('content', get_post_format()); ?>

              <?php endwhile; ?>

            <?php else :
              echo "<p>Conteúdo não encontrado, tente refazer a busca.</p>";
              get_search_form  ();
            endif;?>

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