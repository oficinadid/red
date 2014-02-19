<?php get_header(); ?>

<div id="content" class="search-results">

    <div class="stream modulo first">

        <div id="posts-relacionados">

            <h3>Tema: <strong><?php echo get_queried_object()->name; ?></strong></h3>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php $colaboradores = get_field('colaboradores'); ?>
				<div class="post">
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
	            </div>

	            <div class="cf"></div>

			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>


            <?php wp_pagenavi() ?>

            <div class="cf"></div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
