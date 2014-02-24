<?php
/*
	Template Name: Ideas y Proyectos
*/
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<div id="content" class="page-iyp">

    <div id="iyp" class="modulo first">
        <h3><strong>Ideas y Proyectos</strong></h3>
        <a class="filtro">Filtrar por temas</a>
        <div class="filtros">
            <h6>Filtros por temas</h6>
            <ul class="lista">

                <li><a>Todos los temas</a></li>
                <li><a>Educación</a></li>
                <li><a>Constitución y Reformas Políticas</a></li>
                <li><a>Sistema Tributario</a></li>
                <li><a>Desigualdad y Pobreza</a></li>
                <li><a>Modelo de Desarrollo y Política Industrial</a></li>
                <li><a>Comunicaciones y Tecnología</a></li>
                <li><a>Trabajo y Pensiones</a></li>
                <li><a>Salud</a></li>
                <li><a>Todos los temas</a></li>
                <li><a>Educación</a></li>
                <li><a>Constitución y Reformas Políticas</a></li>
                <li><a>Sistema Tributario</a></li>
                <li><a>Desigualdad y Pobreza</a></li>
                <li><a>Modelo de Desarrollo y Política Industrial</a></li>
                <li><a>Comunicaciones y Tecnología</a></li>
                <li><a>Trabajo y Pensiones</a></li>
                <li><a>Salud</a></li>
                <li><a>Todos los temas</a></li>
                <li><a>Educación</a></li>
                <li><a>Constitución y Reformas Políticas</a></li>
            </ul>
            <div class="bottom">
                <span>* Escoge todos los campos con los que quieras filtrar tu búsqueda.</span>
                <a href="#" class="send">Iniciar búsqueda por filtro</a>
                <div class="cf"></div>
            </div>
        </div>
        <?php echo do_shortcode( '[searchandfilter fields="temas" types="checkbox" hide_empty="0" post_types="post" class="filtros" submit_label="Iniciar búsqueda por filtro" operators="or"]' ); ?>
        <ul class="lista full picright infscr-content">
        	<?php
        	$args = array(
        		'post_type' => 'post',
        		'posts_per_page' => 5,
        		'paged' => $paged
        	);
        	$iyp = new WP_Query($args);

        	if($iyp->have_posts()) : while($iyp->have_posts()): $iyp->the_post(); ?>
        		<?php $colaboradores = get_field('colaboradores'); ?>
        		 <li class="post infscr-item">
	                <div class="pic">
	                	<?php
	                	// d($colaboradores);
						if ( count($colaboradores) > 1): ?>
						<!-- imagen varios autores -->
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
						<?php elseif ( is_array($colaboradores) && count($colaboradores) == 1): ?>
							<!-- imagen para un autor -->
							<?php foreach ($colaboradores as $colaborador): ?>
								<a href="<?php echo get_permalink($colaborador); ?>"><?php echo get_the_post_thumbnail( $colaborador, '130x130' ); ?></a>
							<?php endforeach ?>

						<?php endif ?>

	                </div>
	                <div class="datos">
	                    <h5><a href="#"><?php the_title(); ?></a></h5>
	                    <div class="meta"><?php the_time('F j, Y'); ?> por
						<?php if (is_array($colaboradores)): ?>
							<?php $c = 0; foreach ($colaboradores as $colaborador): ?>
								<?php echo ($c != 0) ? ', ' : ' '; ?><a href="<?php get_permalink($colaborador); ?>"><?php echo get_the_title($colaborador); ?></a>
								<?php $c++; endforeach ?>
						<?php else: ?>
							<?php the_field('fuente') ?>
						<?php endif ?>

	                    </div>
	                </div>
	                <div class="texto">
	                    <?php the_excerpt(); ?><a href="#" class="more">Ver más...</a>
	                </div>
	                <div class="tags">

						<?php
							$temas = get_the_terms(get_the_ID(), 'temas' );
							foreach ($temas as $tema): ?>
							<a class="<?php echo $tema->slug ?>" href="#"><?php echo $tema->name ?></a>
						<?php endforeach ?>

	                </div>
	            </li>

        	<?php endwhile;
        	wp_reset_postdata();
        	endif; ?>

        </ul>
        <!-- <a href="#" class="marco">Ver más <strong>Ideas y Proyectos</strong> &#9662;</a> -->
        <?php wp_pagenavi(array('query' => $iyp)) ?>
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