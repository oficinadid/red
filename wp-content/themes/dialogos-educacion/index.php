<?php get_header(); ?>

<div id="content">

    <div id="about" class="modulo first">
        <h2>Buscamos generar las bases ideológicas y político-prácticas que permita transformar Chile en una sociedad más justa, igualitaria y democrática.</h2>
    </div>

    <div id="participacion" class="modulo">
        <h3>Participación de <strong>Diálogos Ciudadanos</strong></h3>
        <?php
        $args = array(
        	'post_type' => 'preguntas',
        	'posts_per_page' => 1,
        	'no_found_rows' => true
        );
        $pregunta = new WP_Query($args);

        if($pregunta->have_posts()) : while($pregunta->have_posts()): $pregunta->the_post(); ?>

	        <h2><?php the_title(); ?></h2>
	        <?php the_content(); ?>

        <?php endwhile;
        wp_reset_postdata();
        endif; ?>

    </div>

    <div id="noticias" class="modulo">
        <div class="stream">

            <h3>Noticias de <strong>Diálogos Ciudadanos</strong></h3>
			<?php
			$args = array(
				'posts_per_page' => '5',
				'post_type' => 'post',
				'category_name' => 'noticias'
			);
			$noticias = new WP_Query($args);

			if($noticias->have_posts()) : while($noticias->have_posts()): $noticias->the_post(); ?>
				<div class="post">
	                <div class="top">
	                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                    <div class="meta"><?php echo get_the_time('F j, Y', get_the_ID()); ?> en categoría <?php the_category(', '); ?> <?php echo (get_field('autor')) ? 'por <strong>'.get_field("autor").'</strong>' : '';?>.</div>
	                </div>
	                <div class="texto">
	                    <p><?php the_excerpt(); ?></p>
	                </div>
	            </div>

	            <div class="cf"></div>

			<?php endwhile;
			wp_reset_postdata();
			endif; ?>

            <a href="<?php echo esc_url(get_category_link( 1 )); ?>" class="marco">Ver más <strong>Noticias</strong> &#9662;</a>

            <div class="cf"></div>

        </div>
    </div>

    <div id="documentos" class="banda">
        <div class="modulo">
            <h3>Documentos de <strong>Diálogos Ciudadanos</strong></h3>

            <div class="mosaico">

				<?php
				$args = array(
					'posts_per_page' => '6',
					'post_type' => 'post',
					'category_name' => 'documentos'
				);
				$documentos = new WP_Query($args);
				$i = 1;
				if($documentos->have_posts()) : while($documentos->have_posts()): $documentos->the_post(); ?>

					<div class="card <?php echo (has_post_thumbnail()) ? '' : 'no'; ?>pic <?php echo ($i%3 == 0) ? 'third' : ''; ?>">
						<?php if (has_post_thumbnail()): ?>
							<a class="img" href="<?php the_permalink(); ?>">
		                    	<?php the_post_thumbnail('thumbnail'); ?>
		                    </a>

						<?php endif ?>

	                    <div class="texto">
	                        <span class="fecha">Domingo 20 de Enero 2014</span>
	                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                        <?php if (!has_post_thumbnail()): ?>
	                        	<p><?php the_excerpt(); ?></p>
	                        <?php endif ?>
	                        <span class="autor"><?php echo (get_field('autor')) ? 'por <strong>'.get_field("autor").'</strong>' : '';?></span>
	                    </div>
	                </div>

				<?php $i++; endwhile;
				wp_reset_postdata();
				endif; ?>


            </div>

            <div class="cf"></div>

            <a href="<?php echo esc_url(get_category_link( 2 )); ?>" class="marco">Ver más <strong>Documentos</strong> &#9662;</a>

            <div class="cf"></div>

        </div>
    </div>

</div>

<?php get_footer(); ?>