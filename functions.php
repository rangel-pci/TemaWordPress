<?php
	//chama a tag <title></title> e adiciona os formatos de post
	function bs4wp_theme_support(){

		//chama a tag <title></title>
		add_theme_support('title-tag');

		//adiciona os formatos de post
		add_theme_support('post-formats', array('aside', 'image'));

		//adiciona a logotipo
		add_theme_support('custom-logo');
	}
	add_action('after_setup_theme', 'bs4wp_theme_support');

	//previne o erro na tag <title></title> em versões antigas do wp

	if (!function_exists('_wp_render_title_tag')) {
		function bs4wp_render_title(){
			?>
			<title><?php wp_title('|', true, 'right'); ?></title>
			<?php
		}
		add_action('wp_head', 'bs4wp_render_title');
	}

	//registra o Custom Navigation Walker

	require_once get_template_directory().'/class-wp-bootstrap-navwalker.php';

	//registra os menus

	register_nav_menus( array(
		'principal' => __('Menu principal', 'bs4wp')
	));

	//define as thumbnails dos posts

	add_theme_support('post-thumbnails');

	set_post_thumbnail_size(1280, 720, true);

	//define o tamanho dos resumos

	add_filter('excerpt_length', function($length){
		return 50;
	});

	//define o estilo da paginação

	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');

	function posts_link_attributes(){
		return 'class = "btn btn-outline-cor-2 bg-cor-3 text-white"';
	}

	//cria o sidebar

	register_sidebar( array(
		'name' => 'Barra lateral',
		'id' => 'sidebar',
		'before_widget' => '<div class="card mb-4">',
		'after_widget' => '</div></div>',
		'before_title' => '<h5 class="card-header bg-cor-4 text-light">',
		'after_title' => '</h5><div class="card-body">'
	));

	//cria o formulário de busca

	register_sidebar( array(
		'name' => 'Busca',
		'id' => 'busca',
		'before_widget' => '<div class="blog-search">',
		'after_widget' => '</div>',
		'before_title' => '<h5">',
		'after_title' => '</h5>'
	));

	//ativa o formulário de respostas nos comentários

	function theme_queue_js(){
		if ( !current_user_can('administrator') && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');
	}

	add_action('wp_print_scripts', 'theme_queue_js');

	//personaliza os comentários

	function format_comment($comment, $args, $depth){
		$GLOBALS['comment'] = $comment; ?>

		<div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">
			<div class="card mb-3">
				<div class="card-body">
					<div class="comment-intro">
						<h5 class="card-title"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
						<h6 class="card-subtitle mb-3 text-muted">Comentou em <?php printf(__('%1$s'),
						get_comment_time('d/m/yy G:i')) ?></h6>
					</div>
					<?php comment_text(); ?>
					<div class="reply">
						<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_deppth' => $args['max_depth']))) ?>
					</div>
				</div>
			</div>
		<?php
	}

//cria um tipo de post para o banner/slideshow
function create_post_type(){

	$labels = array(
		'name' => __('Banners'),
		'singular_name' => __('Banners')
		);
	register_post_type('banners',
	//defini as opções
	array('labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail'
		),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'rewrite' => array('slug' => 'banners')
	));
}
//inicia o tipo de post
add_action('init', 'create_post_type');

//Inclui as funções de personalização
require get_template_directory(). '/inc/func_customizer.php';

?>