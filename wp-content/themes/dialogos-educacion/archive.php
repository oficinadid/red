<?php
/*
Template Name: Search Results
*/
?>

<?php get_header(); $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

<div id="content" class="search-results">

    <div class="stream modulo first">

        <div id="posts-relacionados">

            <h3><?php single_cat_title(); ?></h3>
			<div class="infscr-content">
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	            	<div class="post infscr-item">
		                <div class="top">
		                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		                    <div class="meta"><?php echo get_the_time('F j, Y', get_the_ID()); ?> <?php echo (get_field('autor')) ? 'por <strong>'.get_field("autor").'</strong>' : '';?>.</div>
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
            </div>



            <div class="cf"></div>

            <?php wp_pagenavi(); ?>

            <div class="cf"></div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
