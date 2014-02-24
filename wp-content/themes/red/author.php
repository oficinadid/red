<?php
/*
Template Name: Single Colaborador
*/
?>

<?php
get_header();
global $wp_query;
$curauth = $wp_query->get_queried_object();
?>

<div id="content" class="page-single-colaborador">


    <div id="breadcrumbs" class="modulo first">
        <ul>
            <li>Estás en:</li>
            <li><a href="<?php bloginfo('wpurl'); ?>">Home</a></li>
            <li>></li>
            <li><a href="<?php bloginfo('wpurl'); ?>/colaboradores">Colaboradores</a></li>
            <li>></li>
            <li><?php echo $curauth->display_name ?></li>
        </ul>
        <a href="#" class="filtro">Listado de Colaboradores</a>
        <div class="cf"></div>
    </div>

    <div class="stream">


        <div id="perfil" class="modulo post">

            <div class="pic">

				<a href="#"><?php echo get_the_post_thumbnail($curauth->ID, '130x130'); ?></a>
            </div>
            <div class="datos">
                <h5><a href="#"><?php echo $curauth->display_name ?></a></h5>
                <?php if (get_field('about', $curauth->ID)): ?>
                	<h6><?php echo get_field('about', $curauth->ID) ?></h6>
                <?php endif ?>

            </div>
            <div class="cf"></div>
            <div class="texto"><?php echo $curauth->description; ?></div>

            <div class="publicaciones">
        	<?php
				$terms = get_terms('temas');

				function terminos($t) {
					return $t->term_id;
				}
				// obtenemos las ids de los temas
				$term_ids = array_map("terminos", $terms);
				// posts pertenecientes a los temas señalados, de los colaboradores
                $posts = get_posts(array(
				    'post_type'	=> 'post',
                	'author_name'	=> $curauth->user_nicename
				));

				if ($posts): ?>

                <h4>Publicaciones del colaborador.</h4>
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
				<?php endif ?>

            </div>



        </div>

        <div id="colaboradores" class="modulo">
        	<?php
	            $args = array(
	            	'post_type' => 'guest-author',
	            	'posts_per_page' => 4,
	            	'no_found_rows' => true
	            );
	            $colaboradores = get_posts( $args );

	            ?>
            <h3><strong>Más Colaboradores</strong></h3>
            <ul class="lista half columnas">

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
	            </li>

            <?php endforeach ?>



        </ul>
            <a href="<?php bloginfo('wpurl'); ?>/colaboradores" class="marco">Ver más <strong>Colaboradores</strong> &#9662;</a>
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