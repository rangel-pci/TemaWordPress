<?php get_header(); ?>
      <!-- Banner/Slideshow
      <div class="row">
        <div class="col-12 mb-2">
          <div id="carousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <?php
              //args

              $args_banner = array(
                'post_type' => 'banners',
                'posts_per_page' => 3,
              );

              //query

              $query_banner = new WP_Query($args_banner);

              ?>
              <?php if($query_banner -> have_posts()) :
              $banner = $banners[0];
              $i = 0;
              while($query_banner -> have_posts()) :
              $query_banner -> the_post();
              ?>

              <div class="carousel-item <?php $i++; if($i == 1) { echo 'active'; } ?>">
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>
                <div class="carousel-caption d-none d-md-block">
                  <h4><?php the_title(); ?></h4>
                  <p class="h5"><?php the_content(); ?></p>
                </div>
              </div>

            <?php endwhile; endif; ?>

            <?php wp_reset_query(); ?>

            </div>

            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="sr-only">Anerior</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="sr-only">Próximo</span>
            </a>

          </div>
        </div>
      </div>
      Banner/Slideshow -->

      <!-- Em destaque card -->
      <!--<div class="row d-flex justify-content-center">
        <?php
          //args

          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category_name' => 'destaque'
          );

          //query

          $query = new WP_Query($args);

        ?>
        <?php if($query -> have_posts()) : while($query -> have_posts()) : $query -> the_post(); ?>

        <div class="col-sm-12 col-md-6 col-lg-4 mb-2">
            <div class="card card-destaque">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid card-img-top')) ?></a>
                <div class="card-body">
                    <h5 class="card-title text-cor-4"><strong><?php the_title(); ?></strong></h5>
                    <a href="<?php the_permalink(); ?>" class="btn btn-cor-1">Leia mais</a>
                </div>
            </div>
        </div>

      <?php endwhile; endif; ?>

      <?php wp_reset_query(); ?>

      </div>-->

      <!-- Em destaque Banner/Slideshow -->
      <div class="row">
        <div class="col-12 mb-2">
          <div id="carousel1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li class="border-light rounded active" data-target="#carousel1" data-slide-to="0"></li>
              <li class="border-light rounded" data-target="#carousel1" data-slide-to="1"></li>
              <li class="border-light rounded" data-target="#carousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

              <?php
              //args

              $args_banner = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => 'destaque'
              );

              //query

              $query_banner = new WP_Query($args_banner);

              ?>
              <?php if($query_banner -> have_posts()) :
              $banner = $banners[0];
              $i = 0;
              while($query_banner -> have_posts()) :
              $query_banner -> the_post();
              ?>

              <div class="carousel-item <?php $i++; if($i == 1) { echo 'active'; } ?>">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?></a>
                <div class="carousel-caption d-none d-md-block">
                  <h4><a class="carousel-link text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
              </div>

            <?php endwhile; endif; ?>

            <?php wp_reset_query(); ?>

            </div>

            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="sr-only">Anerior</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="sr-only">Próximo</span>
            </a>

          </div>
        </div>
      </div>
      <!-- Em destaque Banner/Slideshow -->

      <div class="row">
        <div class="col-12 mb-3">
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <div class="rounded-bottom text-center bg-cor-3 text-white w-100 h5 p-1"><strong>Destaques</strong></div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <div class="triangulo text-light"></div>
            </div>
          </div>
        </div>
      </div>

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