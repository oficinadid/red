<?php
get_header();
$lista_temas = get_queried_object()->slug;
var_dump($lista_temas);
if (isset($_GET['temas'])) {
	$lista_temas = $_GET['temas'];
}

if ($lista_temas) {
	$searchTemas = explode(',', $lista_temas);
	var_dump($searchTemas);
}
?>

<div id="content" class="search-results">

    <div class="stream modulo first">

        <div id="posts-relacionados">



        	<?php if (count($searchTemas) == 1): ?>
        		<h3>Tema: <strong><?php echo get_queried_object()->name; ?></strong></h3>
        	<?php else: ?>
        		<h3>Temas:
        		<?php $i=0; foreach ($searchTemas as $s): ?>
        			<?php $t = get_term_by( 'slug', $s, 'temas'); ?>
        			<strong><?php echo ($i == 0)? '' : ', ' ?><?php echo $t->name; ?></strong>
        		<?php $i++; endforeach ?></h3>
        	<?php endif ?>

			<div class="infscr-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php $colaboradores = get_field('colaboradores'); ?>
				<div class="post infscr-item">
	                <div class="top">
	                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
	                    <p><?php the_excerpt(); ?></p>
	                </div>
	                 <div class="tags">

						<?php
							$temas = get_the_terms(get_the_ID(), 'temas' );
							foreach ($temas as $tema): ?>
							<a class="<?php echo $tema->slug ?>" href="<?php echo get_term_link( $tema->term_id, 'temas' ) ?>"><?php echo $tema->name ?></a>
						<?php endforeach ?>

	                </div>
	            </div>

	            <div class="cf"></div>

			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			</div>


            <?php wp_pagenavi() ?>

            <div class="cf"></div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
