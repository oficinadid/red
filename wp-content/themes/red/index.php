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
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 1,
			'no_found_rows' => true,
			'meta_key' => 'es_destacado',
			'meta_value' => true,
			'fields' => 'ids'
			);
		$destacado = get_posts( $args );
	    ?>

                <div class="card pic big">
                    <a class="img" href="#"><img class="tn" src="<?php bloginfo('template_url'); ?>/img/ideasproyectos-img.jpg"></a>
                    <div class="autor-pic">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                    </div>
                    <div class="texto">
			<span class="fecha">Domingo 20 de Enero 2014 <?php echo get_the_time( 'D d \d\e M Y', $destacado[0] ); ?></span>
			<h2><a href="#"><?php echo get_the_title( $destacado[0] ); ?></a></h2>
                        <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar.</p>
                    </div>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                    </div>
                </div>

                <div class="card pic third">
                    <a class="img" href="#"><img class="tn" src="<?php bloginfo('template_url'); ?>/img/ideasproyectos-img.jpg"></a>
                    <div class="autor-pic">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                    </div>
                    <div class="texto">
                        <span class="fecha">Domingo 20 de Enero 2014</span>
                        <h2><a href="#">Barómetro de Política y Equidad.</a></h2>
                        <span class="autor">Por <a href="#">Guillermo Durán</a></span>
                    </div>
                    <div class="tags">
                        <a class="ciudad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>

                <div class="card pic">
                    <a class="img" href="#"><img class="tn" src="<?php bloginfo('template_url'); ?>/img/ideasproyectos-img.jpg"></a>
                    <div class="texto">
                        <span class="fecha">Domingo 20 de Enero 2014</span>
                        <h2><a href="#">Barómetro de Política y Equidad.</a></h2>
                        <span class="autor">Fuente <a href="#">RED</a></span>
                    </div>
                    <div class="tags">
                        <a class="ciudad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>

                <div class="card nopic">
                    <div class="autor-pic">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                    </div>
                    <div class="texto">
                        <span class="fecha">Domingo 20 de Enero 2014</span>
                        <h2><a href="#">Barómetro de Política y Equidad.</a></h2>
                        <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar.</p>
                        <span class="autor">Por <a href="#">Guillermo Durán</a></span>
                    </div>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                    </div>
                </div>

                <div class="card nopic third">
                    <div class="autor-pic">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                    </div>
                    <div class="texto">
                        <span class="fecha">Domingo 20 de Enero 2014</span>
                        <h2><a href="#">Barómetro de Política y Equidad.</a></h2>
                        <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar.</p>
                        <span class="autor">Por <a href="#">Guillermo Durán</a></span>
                    </div>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                    </div>
                </div>

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

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 en categoría <a href="#">Papers</a> por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
            </div>

            <div class="cf"></div>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 en categoría <a href="#">Papers</a> por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
            </div>

            <div class="cf"></div>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 en categoría <a href="#">Papers</a> por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
            </div>

            <a href="#" class="marco">Ver más <strong>Ideas y Proyectos</strong> &#9656;</a>

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