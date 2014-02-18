<?php
/*
Template Name: Single Colaborador
*/
?>

<?php get_header(); ?>

<div id="content" class="page-single-colaborador">

    <div id="breadcrumbs" class="modulo first">
        <ul>
            <li>Estás en:</li>
            <li><a href="<?php bloginfo('wpurl'); ?>">Home</a></li>
            <li>></li>
            <li><a href="<?php bloginfo('wpurl'); ?>/colaboradores">Colaboradores</a></li>
            <li>></li>
            <li><?php the_title(); ?></li>
        </ul>
        <a href="#" class="filtro">Listado de Colaboradores</a>
        <div class="cf"></div>
    </div>

    <div class="stream">

        <div id="perfil" class="modulo post">

            <?php if (have_posts()) : while (have_posts()) : the_post(); $post_id = get_the_ID(); ?>

                <div class="pic">
                    <a href="#"><?php the_post_thumbnail('130x130'); ?></a>
                </div>
                <div class="datos">
                    <h5><a href="#"><?php the_title(); ?></a></h5>
                    <h6><?php the_field('about') ?></h6>
                </div>
                <div class="cf"></div>
                <div class="texto"><?php the_content(); ?></div>

                <div class="publicaciones">
                    <h4>Publicaciones del colaborador.</h4>

						<?php
							$terms = get_terms('temas');

							function terminos($t) {
								return $t->term_id;
							}
							// obtenemos las ids de los temas
							$term_ids = array_map("terminos", $terms);
							// posts pertenecientes a los temas señalados, de los colaboradores
		                    $posts = get_posts(array(
							    'post_type'		=> 'post',
		                    	'meta_query'	=> array (
		                    		array (
		                    			'key' => 'colaboradores',
		                    			'value' => '"' . get_the_ID() . '"',
		                    			'compare' => 'LIKE'
		                    			)
		                    		),
		                    	// 'tax_query'		=> array (
		                    	// 	array (
		                    	// 		'taxonomy'  => 'temas',
		                    	// 		'field'     => 'id',
		                    	// 		'terms'     => $term_ids,
		                    	// 	)
		                    	// )
							));
 						?>

	                    <?php foreach ($terms as $t): ?>
	                    	<?php
	                    		$posts_in_term = array_filter($posts, function($p) use ($t) {
	                    			return has_term($t->term_id, 'temas', $p);
	                    		}); ?>

	                    		<?php if ($posts_in_term): ?>
	                    			<ul>
				                        <div class="tags"><a class="<?php echo $t->slug ?>" href="#"><?php echo $t->name ?></a></div>
				                        <?php foreach ($posts_in_term as $post ): ?>
											<li><a href="<?php get_permalink($post->ID); ?>"><?php echo $post->post_title ?></a></li>
				                        <?php endforeach ?>
				                    </ul>

	                    		<?php endif ?>


	                    <?php endforeach ?>

                </div>

            <?php endwhile; wp_reset_query(); endif; ?>

        </div>

        <div id="colaboradores" class="modulo">
            <h3><strong>Más Colaboradores</strong></h3>
            <ul class="lista half columnas">

            <?php
            $args = array(
            	'post_type' => 'colaboradores',
            	'posts_per_page' => -1,
            	'no_found_rows' => true,
            	'post__not_in' => array($post_id)
            );
            $colaboradores = new WP_Query($args);

            if($colaboradores->have_posts()) : while($colaboradores->have_posts()): $colaboradores->the_post(); ?>

            	<?php
            		$c_posts =
            			get_posts(
							array (
								'post_type'		=> 'post',
								'meta_query'	=> array (
									array (
										'key' => 'colaboradores',
										'value' => '"' . get_the_ID() . '"',
										'compare' => 'LIKE'
									)
								)
						));
				?>
            	<li>
	                <div class="pic">
	                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('130x130'); ?></a>
	                </div>
	                <div class="datos">
	                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	                    <h6><?php the_field('about') ?></h6>
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
	            </li>

            <?php endwhile;
            wp_reset_postdata();
            endif; ?>

        </ul>
            <a href="#" class="marco">Ver más <strong>Colaboradores</strong> &#9662;</a>
            <div class="cf"></div>
        </div>

    </div>



    <div id="banner-dc" class="banda">
        <div class="modulo">
            <h2 id="logo-main"></h2>
            <div class="right">
                <a href="#">Ir al sitio de Diálogos</a>
                <span>Conoce el proyecto de participación de <strong>RED</strong></span>
            </div>
            <div class="cf"></div>
        </div>
    </div>

</div>

<?php get_footer(); ?>