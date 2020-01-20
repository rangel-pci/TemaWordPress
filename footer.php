<footer>
      <div class="w-100 bg-dark border-top border-primary mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12 py-5 text-center text-light">
              <h5><?php echo get_theme_mod('footer_title', 'Tema para WordPress'); ?></h5>
              <p class="mb-0"><?php echo get_theme_mod('footer_text', 'Feito com Bootstrap4'); ?></p>
            </div>
          </div>
        </div>
      </div>

      <?php wp_footer(); ?>
      
      <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/popper.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    </footer>
  </body>
</html>