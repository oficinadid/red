<?php get_header(); ?>

<div id="content">

    <div id="directorio" class="modulo first">
        <h3><strong>Directorio</strong> RED</h3>
        <ul class="lista full">
        <?php
			$args = array(
				'no_found_rows' => true,
	        	'post_type' => 'colaboradores',
	        	'meta_query' => array(
			       array(
			           'key' => 'directorio',
			           'value' => true,
			           'compare' => 'LIKE',
			       )
			   )
	        );
        $directorio = new WP_Query($args);

        if($directorio->have_posts()) : while($directorio->have_posts()): $directorio->the_post(); $exposts[] = get_the_ID(); ?>
        	<li>
                <div class="pic">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('130x130'); ?></a>
                </div>
                <div class="datos">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <h6><?php the_field('about') ?></h6>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                        <a class="tributario" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
                <a href="<?php the_permalink(); ?>" class="mas">Ver más...</a>
            </li>

        <?php endwhile;
        wp_reset_postdata();
        endif; ?>

        </ul>
    </div>

    <div id="colaboradores" class="modulo">
        <h3>Red de <strong>Colaboradores</strong></h3>
        <ul class="lista half">
        <?php
        $args = array(
        		'no_found_rows' => true,
        		'post_type' => 'colaboradores',
        		'posts_per_page' => 8,
        		'post__not_in' => $exposts
        	);
        $colaboradores = new WP_Query($args);

        if($colaboradores->have_posts()) : while($colaboradores->have_posts()): $colaboradores->the_post(); ?>
        	<li>
                <div class="pic">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('130x130'); ?></a>
                </div>
                <div class="datos">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
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
            	// $args = array(
            	// 	'post_type' => 'post',
            	// 	'posts_per_page' => 1,
            	// 	'no_found_rows' => true,
            	// 	'meta_key' => 'es_destacado',
            	// 	'meta_value' => true,
            	// 	'fields' => 'ids'
            	// 	);
            	// $destacados = get_posts( $args );
            ?>
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

					<div class="card pic big">
	                    <a class="img" href="#"><img class="tn" src="<?php bloginfo('template_url'); ?>/img/ideasproyectos-img.jpg"></a>
	                    <div class="autor-pic">
	                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
	                    </div>
	                    <div class="texto">
	                        <span class="fecha"><?php the_time('l j \d\e F Y'); ?></span>
	                        <h2><a href="#"><?php the_title(); ?></a></h2>
	                        <p><?php the_excerpt(); ?></p>
	                    </div>
	                    <div class="tags">
	                    	<?php $temas = get_the_terms(get_the_ID(), 'temas' ); ?>
	                    	<?php foreach ($temas as $tema): ?>
	                    		<a class="<?php echo $tema->slug ?>" href="#"><?php echo $tema->name ?></a>
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
                    	$colaboradores = get_field('colaboradores');
                    	$fuente = get_field('fuente');
                    ?>
					<div class="card <?php echo (has_post_thumbnail()) ? 'pic' : 'nopic' ?> <?php echo (($i % 3 == 0) || ($i == 0)) ? 'third' : '' ?>">
						<?php if (has_post_thumbnail()): ?>
							<a class="img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
						<?php endif ?>
						<?php if ($colaboradores): ?>
							<div class="autor-pic">
		                    	<?php if ( count($colaboradores) > 1): ?>
		                    		<!-- imagen varios autores -->
									<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
								<?php elseif (count($colaboradores) == 1): ?>
									<!-- imagen para un autor -->
									<?php foreach ($colaboradores as $colaborador): ?>
										<a href="#"><?php echo get_the_post_thumbnail( $colaborador, '130x130' ); ?></a>
									<?php endforeach ?>

		                    	<?php endif ?>
		                    </div>
						<?php endif ?>

	                    <div class="texto">
	                        <span class="fecha"><?php the_time('l j \d\e F Y'); ?></span>
	                        <h2><a href="#"><?php the_title(); ?></a></h2>

	                        <?php if ($colaboradores): ?>

	                        	<?php if (count($colaboradores) > 1): ?>
	                        		<span class="autor">Por: Varios Autores</span>
	                        	<?php else: ?>
	                        		<?php foreach ($colaboradores as $colaborador): ?>
	                        			<span class="autor">Por: <a href="<?php echo get_permalink($colaborador); ?>"><?php echo get_the_title($colaborador); ?></a></span>
	                        		<?php endforeach ?>
	                        	<?php endif ?>


	                        <?php elseif ($fuente): ?>

	                        	<span class="autor">Fuente:
		                        	<?php if (get_field('url_fuente')): ?>
		                        		<a href="<?php the_field('url_fuente') ?>"><?php the_field('fuente') ?></a>
		                        	<?php else: ?>
										<?php the_field('fuente') ?>
		                        	<?php endif ?>

	                        	</span>
	                        <?php endif ?>

	                    </div>
	                    <div class="tags">
	                    	<?php $temas = get_the_terms(get_the_ID(), 'temas' ); ?>
	                    	<?php foreach ($temas as $tema): ?>
	                    		<a class="<?php echo $tema->slug ?>" href="#"><?php echo $tema->name ?></a>
	                    	<?php endforeach ?>

	                    </div>
	                </div>

				<?php $i++; endwhile;
				wp_reset_postdata();
				endif; ?>


            </div>

            <div class="cf"></div>

            <a href="#" class="marco">Ver más <strong>Ideas y Proyectos</strong> &#9656;</a>

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


            <a href="#" class="marco">Ver más de <strong>Diálogos Ciudadanos</strong> &#9656;</a>

            <div class="cf"></div>

        </div>
        <div id="participacion">
            <h3>Participación de <strong>Diálogos Ciudadanos</strong></h3>
            <h1>¿Pregunta en Diálogos ...disponible del Barómetro de Política y Equidad?</h1>
            <a href="#" class="respuesta">Danos tu respuesta</a>
        </div>
    </div>

</div>

<?php get_footer(); ?>