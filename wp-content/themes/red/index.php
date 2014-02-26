<?php
get_header();
// variables de uso general
$terms = get_terms('temas');
?>

<div id="content">

    <div id="directorio" class="modulo first">
        <h3><strong>Directorio</strong> RED</h3>
        <ul class="lista full">
        <?php

			$args = array(
				'no_found_rows' => true,
	        	'post_type' => 'guest-author',
	        	'meta_query' => array(
			       array(
			           'key' => 'directorio',
			           'value' => true,
			           'compare' => 'LIKE',
			       )
			   )
	        );
        $coautores = get_posts( $args ); ?>

        <?php foreach ($coautores as $coautor): ?>
        	<?php $exposts[] = $coautor->ID;
        	// posts coautores
        	$user_login = get_post_meta($coautor->ID, 'cap-user_login', true );
        	$c_posts =
    			get_posts(
					array (
						'post_type'		=> 'post',
						'author_name' => $user_login
				));
        	?>
        	<li>
                <div class="pic">
                    <a href="<?php echo bloginfo('wpurl'); ?>/?author_name=<?php echo get_post_meta($coautor->ID, 'cap-user_login', true); ?>"><?php echo get_the_post_thumbnail($coautor->ID, '130x130'); ?></a>
                </div>
                <div class="datos">
                    <h5><a href="<?php echo bloginfo('wpurl'); ?>/?author_name=<?php echo get_post_meta($coautor->ID, 'cap-user_login', true); ?>"><?php echo $coautor->post_title; ?></a></h5>
                    <h6><?php the_field('about', $coautor->ID) ?></h6>
                    <div class="tags">
                    	<?php foreach ($terms as $t): ?>
                    	<?php
                    		$posts_in_term = array_filter($c_posts, function($p) use ($t) {
                    			return has_term($t->term_id, 'temas', $p);
                    		}); ?>

                    		<?php if ($posts_in_term): ?>
                    			<a class="<?php echo $t->slug ?>" href="<?php echo get_term_link( $t, 'temas' ) ?>"><?php echo $t->name ?></a>

                    		<?php endif ?>

                    <?php endforeach ?>

                    </div>
                </div>
                <a href="<?php echo bloginfo('wpurl'); ?>/?author_name=<?php echo get_post_meta($coautor->ID, 'cap-user_login', true); ?>" class="mas">Ver más...</a>
            </li>
        <?php endforeach ?>

        </ul>
    </div>

    <div id="colaboradores" class="modulo">
        <h3>Red de <strong>Colaboradores</strong></h3>
        <ul class="lista half">
        <?php
        $args = array(
        		'no_found_rows' => true,
        		'post_type' => 'guest-author',
        		'posts_per_page' => 8,
        		'no_found_rows' => true,
        		'post__not_in' => $exposts
        	);
        $colaboradores = new WP_Query($args);

        if($colaboradores->have_posts()) : while($colaboradores->have_posts()): $colaboradores->the_post(); ?>

        	<li>
                <div class="pic">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('130x130'); ?></a>
                </div>
                <div class="datos">
                    <h5><a href="<?php echo bloginfo('wpurl'); ?>/?author_name=<?php echo get_post_meta(get_the_ID(), 'cap-user_login', true); ?>"><?php the_title(); ?></a></h5>
                    <h6><?php the_field('about') ?></h6>
                </div>
            </li>
        <?php endwhile;
        wp_reset_postdata();
        endif; ?>

        </ul>
        <a href="<?php bloginfo('wpurl'); ?>/colaboradores" class="marco">Ir a todos los <strong>Colaboradores</strong> &#9656;</a>
        <div class="cf"></div>
    </div>

    <div id="ideasyproyectos" class="banda">
        <div class="modulo">
            <h3><strong>Ideas y Proyectos</strong></h3>

            <div class="mosaico">
				<?php
				$args = array(
            		'post_type' => 'post',
            		'posts_per_page' => 1,
            		'no_found_rows' => true,
            		'meta_key' => 'es_destacado',
            		'meta_value' => true
            		);
				$post_destacado = new WP_Query($args);

				if($post_destacado->have_posts()) : while($post_destacado->have_posts()): $post_destacado->the_post(); $ex_destacado[] = get_the_ID(); ?>
					<?php
						$coautores = get_coauthors();
						$fuente = get_field('fuente');
					 ?>

					 <?php foreach ($coautores as $coautor): ?>

					 <?php endforeach ?>
					<div class="card pic big">
			    		<a class="img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>

			    		<?php if (!$fuente): ?>
			    			<?php if ($coautores): ?>
								<div class="autor-pic">
									<?php if ( count($coautores) > 1): ?>
										<!-- imagen varios autores -->
										<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
									<?php elseif (count($coautores) == 1): ?>
										<!-- imagen para un autor -->
										<a href="<?php echo bloginfo('wpurl'); ?>/?author_name=<?php echo get_post_meta($coautores[0]->ID, 'cap-user_login', true); ?>"><?php echo get_the_post_thumbnail($coautores[0]->ID, '130x130' ); ?></a>

									<?php endif ?>
					    		</div>
							<?php endif ?>
			    		<?php endif ?>

	                    <div class="texto">
	                        <span class="fecha"><?php the_time('l j \d\e F Y'); ?></span>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_excerpt(); ?></p>
	                    </div>
	                    <div class="tags">
	                    	<?php $temas = get_the_terms(get_the_ID(), 'temas' ); ?>
	                    	<?php foreach ($temas as $tema): ?>
	                    		<a class="<?php echo $tema->slug ?>" href="<?php echo get_term_link( $tema->term_id, 'temas' ) ?>"><?php echo $tema->name ?></a>
	                    	<?php endforeach ?>

	                    </div>
	                </div>

				<?php endwhile;
				wp_reset_postdata();
				endif; ?>

				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 4,
					'post__not_in' => $ex_destacado,
					'no_found_rows' => true
				);
				$lista_posts = new WP_Query($args);
				$i = 0;
				if($lista_posts->have_posts()) : while($lista_posts->have_posts()): $lista_posts->the_post(); ?>

					<?php
						$coautores = get_coauthors();

                    	$fuente = get_field('fuente');

                    ?>
					<div class="card <?php echo (has_post_thumbnail()) ? 'pic' : 'nopic' ?> <?php echo (($i % 3 == 0) || ($i == 0)) ? 'third' : '' ?>">
						<?php if (has_post_thumbnail()): ?>
							<a class="img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<?php endif ?>
						<?php if (!$fuente): ?>
							<?php if ($coautores): ?>
								<div class="autor-pic">
			                    	<?php if ( count($coautores) > 1): ?>
			                    		<!-- imagen varios autores -->
										<a href="#"><img src="http://placehold.it/90x90"></a>
									<?php elseif (count($coautores) == 1): ?>
										<!-- imagen para un autor -->

											<a href="#"><?php echo get_the_post_thumbnail( $coautores[0]->ID, '130x130' ); ?></a>


			                    	<?php endif ?>
			                    </div>
							<?php endif ?>
						<?php endif ?>

	                    <div class="texto">
	                        <span class="fecha"><?php the_time('l j \d\e F Y'); ?></span>
	                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php if (!has_post_thumbnail()): ?>
								<p><?php echo wp_trim_words( get_the_excerpt(), 20); ?></p>
							<?php endif ?>

	                        <?php if ($fuente): ?>
	                        	<span class="autor">Fuente:
		                        	<?php if (get_field('url_fuente')): ?>
		                        		<a href="<?php the_field('url_fuente') ?>"><?php the_field('fuente') ?></a>
		                        	<?php else: ?>
										<?php the_field('fuente') ?>
		                        	<?php endif ?>

	                        	</span>

	                        <?php else: ?>
	                        	<?php if (count($coautores) > 1): ?>
	                        		<span class="autor">Por: Varios Autores</span>
	                        	<?php else: ?>
	                        			<span class="autor">Por: <a href="<?php echo get_permalink($coautores[0]->ID); ?>"><?php echo get_the_title($coautores[0]->ID); ?></a></span>

	                        	<?php endif ?>

	                        <?php endif ?>

	                    </div>

	                    <div class="tags">
	                    	<?php $temas = get_the_terms(get_the_ID(), 'temas' ); ?>
	                    	<?php foreach ($temas as $tema): ?>
	                    		<a class="<?php echo $tema->slug ?>" href="<?php echo get_term_link( $tema->term_id, 'temas' ) ?>"><?php echo $tema->name ?></a>
	                    	<?php endforeach ?>
	                    </div>
	                </div>

				<?php $i++; endwhile;
				wp_reset_postdata();
				endif; ?>


            </div>

            <div class="cf"></div>

            <a href="<?php bloginfo('wpurl'); ?>/ideas-y-proyectos" class="marco">Ver más <strong>Ideas y Proyectos</strong> &#9656;</a>

        </div>
    </div>

    <div id="banner-dc" class="banda">
        <div class="modulo">
            <h2 id="logo-main"></h2>
            <div class="right">
                <a href="http://dialogos.redparalademocracia.cl">Ir al sitio de Diálogos</a>
                <span>Conoce el proyecto de participación de <strong>RED</strong></span>
            </div>
            <div class="cf"></div>
        </div>
    </div>

    <div id="noticias-dc" class="modulo">
        <div class="stream">

            <h3>Últimas Noticias de <strong>Diálogos Ciudadanos</strong></h3>

            <?php
            	switch_to_blog( 4 );
            	$dc_posts = get_posts(array('posts_per_page' => 5)); ?>

            	<?php foreach ($dc_posts as $dc_post): ?>


            		<div class="post">
		                <div class="top">
		                    <h2 class="title"><a href="<?php echo get_permalink($dc_post->ID); ?>"><?php echo get_the_title($dc_post->ID); ?></a></h2>
		                    <div class="meta"><?php echo get_the_time('F j, Y', $dc_post->ID); ?>
								<?php if (get_post_meta($dc_post->ID, 'autor', true )): ?>
									por <strong><?php echo get_post_meta( $dc_post->ID, 'autor', true ); ?></strong>.
								<?php endif ?>
		                    </div>
		                </div>
		                <div class="texto">
		                    <p><?php echo $dc_post->post_excerpt ?></p>
		                </div>
		            </div>

		            <div class="cf"></div>

            	<?php endforeach; restore_current_blog(); ?>


            <a href="http://dialogos.redparalademocracia.cl" class="marco">Ver más de <strong>Diálogos Ciudadanos</strong> &#9656;</a>

            <div class="cf"></div>

        </div>
        <div id="participacion">
            <h3>Participación de <strong>Diálogos Ciudadanos</strong></h3>
            <h1>¿Pregunta en Diálogos ...disponible del Barómetro de Política y Equidad?</h1>
            <a href="http://dialogos.redparalademocracia.cl" class="respuesta">Danos tu respuesta</a>
        </div>
    </div>

</div>

<?php get_footer(); ?>