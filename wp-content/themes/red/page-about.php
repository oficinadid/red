<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div id="content" class="page-about">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<div id="quees" class="modulo first">
	        <h3>¿Qué es <strong>RED</strong>?</h3>


	        <?php the_field('que_es_red') ?>
	    </div>

	    <div id="objetivo" class="modulo">

	        <?php the_field('objetivo') ?>
	    </div>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>


    <div id="directorio" class="modulo">
        <h3><strong>Directorio</strong></h3>
        <ul class="lista full picright">
        <?php
        $args = array(
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

        if($directorio->have_posts()) : while($directorio->have_posts()): $directorio->the_post(); $exposts[] = get_the_ID() ?>
        	<li>
                <div class="pic">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('130x130'); ?></a>
                </div>
                <div class="datos">
                    <h5><a href="#"><?php the_title(); ?></a></h5>
                    <h6><?php the_field('about') ?></h6>
                </div>
                <div class="texto">
                    <?php the_content(); ?>
                </div>
		<a href="<?php the_permalink(); ?>" class="link">> Publicaciones de <strong><?php the_title(); ?></strong></a>
            </li>

        <?php endwhile;
        wp_reset_postdata();
        endif; ?>


        </ul>
    </div>

    <!-- <div id="colaboradores" class="modulo">
        <h3><strong>Equipo</strong></h3>
        <ul class="lista half">
        	<?php
        	$args = array(
        		'post_type' => 'colaboradores',
        		'posts_per_page' => 8,
        		'post__not_in' => $exposts
        	);
        	$equipo = new WP_Query($args);

        	if($equipo->have_posts()) : while($equipo->have_posts()): $equipo->the_post(); ?>
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
        <a href="#" class="marco">Ir a todos los <strong>Colaboradores</strong> &#9656;</a>
        <div class="cf"></div>
    </div> -->

    <div id="banner-dc" class="banda">
        <img src="<?php bloginfo('template_url'); ?>/img/about-dc.png">
    </div>

    <div id="dc" class="modulo">

        <h3>¿Qué es <strong>Diálogos Ciudadanos</strong>?</h3>
		<?php the_field('que_es_dialogos', 'option') ?>

        <span class="conoce">Conoce el proyecto de participación de <strong>RED</strong></span>
        <a href="http://dialogos.redparalademocracia.cl" class="ir">Ir a Diálogos Ciudadanos</a>

    </div>

</div>

<?php get_footer(); ?>