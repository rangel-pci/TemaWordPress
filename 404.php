<?php get_header(); ?>
      <!-- conteúdo -->
      <div class="row">
        <!-- posts -->
        <div class="col-md-8 col-sm-12">
          <main>

            <h3 class="mb-3">Página não encontrada</h3>

            <p>O caminho "<?= $_SERVER['REQUEST_URI']?>" está incorreto, ou a página em questão pode ter sido removida.</p>

          </main>
        </div>
      <?php get_sidebar(); ?> 
      </div>
    </div>

<?php get_footer(); ?>