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
            <h6>Filtros por temas<span>* Escoge todos los campos con los que quieras filtrar tu búsqueda.</span></h6>
            <?php echo do_shortcode( '[searchandfilter fields="temas" types="checkbox" hide_empty="0" post_types="post" submit_label="Iniciar búsqueda por filtro" operators="or"]' ); ?>
            <div class="cf"></div>
        </div>
       
        <ul class="lista full picright infscr-content">
        	<?php
        	$args = array(
        		'post_type' => 'post',
        		'posts_per_page' => 5,
        		'paged' => $paged
        	);
        	$iyp = new WP_Query($args);

        	if($iyp->have_posts()) : while($iyp->have_posts()): $iyp->the_post(); ?>
        		<?php
        			$fuente = get_field('fuente');
        			$coautores = get_coauthors();
        		?>
        		 <li class="post infscr-item">
	                <div class="pic">
	                <?php if (!$fuente): ?>
	                	<?php
						if ( count($coautores) > 1): ?>
						<!-- imagen varios autores -->
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
						<?php elseif ( is_array($coautores) && count($coautores) == 1): ?>
							<!-- imagen para un autor -->
							<a href="<?php echo get_permalink($coautores[0]->ID); ?>"><?php echo get_the_post_thumbnail( $coautores[0]->ID, '130x130' ); ?></a>
						<?php endif ?>

	                <?php endif ?>


	                </div>
	                <div class="datos">

	                    <h5><a href="#"><?php the_title(); ?></a></h5>
	                    <div class="meta"><?php the_time('F j, Y'); ?> por
						<?php if (is_array($coautores) && !$fuente): ?>
							<?php $c = 0; foreach ($coautores as $coautor): ?>
								<?php echo ($c != 0) ? ', ' : ' '; ?><a href="<?php get_permalink($coautor->ID); ?>"><?php echo get_the_title($coautor->ID); ?></a>
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
							<a class="<?php echo $tema->slug ?>" href="<?php echo get_term_link( $tema->term_id, 'temas' ) ?>"><?php echo $tema->name ?></a>
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
                <a class="ir" href="http://dialogos.redparalademocracia.cl">Ir al sitio de Diálogos</a>
                <span>Conoce el proyecto de participación de <strong>RED</strong></span>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>