<?php get_header(); ?>

<div id="content" class="page-colaboradores">

    <div id="colaboradores" class="modulo first">
    	<?php
    		$str='z';
        	$args = array(
    		'no_found_rows' => true,
    		'post_type' => 'guest-author',
    		'posts_per_page' => -1,
    		'no_found_rows' => true,
    		'meta_key' => 'cap-last_name',
    		'orderby' => 'meta_value',
    		'order' => 'ASC'
    	);
		$colaboradores = get_posts( $args );
    	?>

        <h3><strong>Colaboradores</strong></h3>
         <a class="filtro">Listado de Colaboradores</a>
        <div class="filtros">
            <h6>Colaboradores por orden alfabético</h6>
            <ul class="lista">
				<?php foreach ($colaboradores as $colaborador): ?>
					<?php
            			$title = get_post_meta( $colaborador->ID, 'cap-last_name', true );;
			            $s = 0;
			            $db = 1;
			            $title_f = mb_substr($title,$s,$db);

            		?>
            		<li><?php echo ($str != $title_f) ? '<span>'.$title_f.'.</span>' :'' ?><a href="<?php echo bloginfo('wpurl'); ?>/?author_name=<?php echo get_post_meta($colaborador->ID, 'cap-user_login', true); ?>"><?php echo $colaborador->post_title; ?></a></li>
            	<?php $str=$title_f; endforeach ?>
            </ul>
        </div>
        <ul class="lista half columnas">
        <?php
            $args = array(
            	'post_type' => 'guest-author',
            	'posts_per_page' => -1,
            	'no_found_rows' => true
            );
            $terms = get_terms('temas');

			function terminos($t) {
				return $t->term_id;
			}
			// obtenemos las ids de los temas
			$term_ids = array_map("terminos", $terms);
            $colaboradores = get_posts( $args ); ?>

            <?php foreach ($colaboradores as $colaborador): ?>
            	<?php
            		$user_login = get_post_meta($colaborador->ID, 'cap-user_login', true );
            		$c_posts = get_posts(
            			array (
            				'post_type'	=> 'post',
            				'author_name' => $user_login
            			)
            		);

				?>
            	<li>
	                <div class="pic">
	                    <a href="<?php echo bloginfo('wpurl'); ?>/?author_name=<?php echo get_post_meta($colaborador->ID, 'cap-user_login', true); ?>"><?php echo get_the_post_thumbnail($colaborador->ID, '130x130'); ?></a>
	                </div>
	                <div class="datos">
	                    <h5><a href="<?php echo bloginfo('wpurl'); ?>/?author_name=<?php echo get_post_meta($colaborador->ID, 'cap-user_login', true); ?>"><?php echo $colaborador->post_title; ?></a></h5>
	                    <h6><?php the_field('about', $colaborador->ID) ?></h6>
	                    <div class="tags">
	                    	<?php foreach ($terms as $t): ?>
	                    	<?php
	                    		$posts_in_term = array_filter($c_posts, function($p) use ($t) {
	                    			return has_term($t->term_id, 'temas', $p);
	                    		}); ?>

	                    		<?php if ($posts_in_term): ?>
	                    			<a class="<?php echo $t->slug ?>" href="#"><?php echo $t->name ?></a>

	                    		<?php endif ?>

	                    <?php endforeach ?>

	                    </div>
	                </div>
            <?php endforeach ?>





        </ul>
        <a href="#" class="marco">Ver más <strong>Colaboradores</strong> &#9662;</a>
        <div class="cf"></div>
    </div>

    <div id="banner-dc" class="banda">
        <div class="modulo">
            <div class="elements">
                <a class="ir" href="http://dialogos.redparalademocracia.cl">Ir al sitio de Diálogos</a>
                <span>Conoce el proyecto de participación de <strong>RED</strong></span>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>