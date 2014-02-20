<?php
/*
Template Name: Search Results
*/
?>

<?php get_header(); ?>

<div id="content" class="search-results">

    <div class="stream modulo first">

        <div id="posts-relacionados">

            <h3>Resultados de Búsqueda para <strong>"<?php echo $_GET['s'] ?>"</strong></h3>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<div class="post">
	                <div class="top">
	                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                    <div class="meta">Diciembre 12, 2013 por <a href="#">Gonzalo Durán</a>.</div>
	                </div>
	                <div class="texto">
	                    <p><?php the_excerpt(); ?></p>
	                </div>
	            </div>

            <div class="cf"></div>
            <?php endwhile; ?>
            <?php else: ?>
				<h2 class="title"><a href="#">No se encontraron resultados</a></h2>
            <?php endif; ?>



            <div class="cf"></div>

            <a href="#" class="marco">Ver más <strong>Resultados</strong> &#9662;</a>

            <div class="cf"></div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
