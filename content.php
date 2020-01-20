<?php if(is_single()): ?>

    <h1><?php the_title();?></h1>

	<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>
              <hr class="mb-5">
        <?php the_content(); ?>

        <p class="text-muted mt-5 mb-3">Publicado por: <?= the_author(); ?>
        <br>
        em <span class="badge badge-success"><?php echo get_the_time('d/m/yy').' ás '.get_the_time('G:i'); ?></span></p>

        <hr>
        <!-- sessão de comentários -->
        <?php comments_template(); ?>

<?php else: ?>

	<div class="blog-post">
    	<h3 class="mb-3 pb-2 border-bottom"><a class="text-cor-4" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="row">
			<div class="col-md-12 col-lg-6 mb-3">
            	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded-left')); ?></a>
            </div>
            <div class="col-md-12 col-lg-6 mb-3">
             <?php the_excerpt(); ?>
         	</div>
       	</div>
        <p class="text-muted">Publicado em: <span class="badge badge-success"><?php echo get_the_time('d/m/yy').' ás '.get_the_time('G:i'); ?></span></p>
    </div>

<?php endif; ?>	