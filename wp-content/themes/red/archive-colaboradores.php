<?php
/*
	Template Name: Colaboradores
*/
get_header(); ?>

<div id="content" class="page-colaboradores">

    <div id="colaboradores" class="modulo first">
        <h3><strong>Colaboradores</strong></h3>
        <a href="#" class="filtro">Listado de Colaboradores</a>
        <ul class="lista half columnas">
        <?php
            $args = array(
            	'post_type' => 'colaboradores',
            	'posts_per_page' => -1,
            	'no_found_rows' => true
            );
            $terms = get_terms('temas');

			function terminos($t) {
				return $t->term_id;
			}
			// obtenemos las ids de los temas
			$term_ids = array_map("terminos", $terms);
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

    <div id="banner-dc" class="banda">
        <div class="modulo">
            <div class="elements">
                <a class="ir" href="#">Ir al sitio de Diálogos</a>
                <span>Conoce el proyecto de participación de <strong>RED</strong></span>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>