<?php get_header(); ?>

<div id="content" class="single">

    <div id="breadcrumbs" class="modulo first">
        <ul>
            <li>Estás en:</li>
            <li><a href="<?php bloginfo('template_url'); ?>">Home</a></li>
            <li>></li>
            <li><a href="<?php bloginfo('template_url'); ?>/ideas-y-proyectos">Ideas y Proyectos</a></li>
            <li>></li>
            <li><?php the_title(); ?></li>
        </ul>
        <div class="cf"></div>
    </div>

    <div class="stream">

        <div id="post-main" class="modulo post">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            	<?php $colaboradores = get_field('colaboradores'); ?>

                <div class="top">
                    <h2 class="title"><?php the_title(); ?></h2>
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
                <div class="autor">
                    <?php if (count($colaboradores) > 1): ?>
	                	<a class="autores-trigger">
	                        <span class="trigger">+</span>
	                        <span class="untrigger">-</span>
	                        <img src="<?php bloginfo('template_url'); ?>/img/autores.jpg">
	                    </a>
	                    <ul class="autores">
	                    	<?php foreach ($colaboradores as $colaborador): ?>
	                    		<li>
		                            <a href="<?php echo get_permalink($colaborador); ?>">
		                                <?php echo get_the_post_thumbnail($colaborador, '130x130'); ?>
		                                <span><?php echo get_the_title($colaborador); ?></span>
		                                <div class="cf"></div>
		                            </a>
		                        </li>
	                    	<?php endforeach ?>
	                    </ul>
	                <?php elseif( is_array($colaboradores) && count($colaboradores) == 1): ?>
	                	<?php foreach ($colaboradores as $colaborador): ?>
	                		<a href="<?php echo get_permalink($colaborador); ?>"><?php echo get_the_post_thumbnail($colaborador, '130x130'); ?></a>
	                	<?php endforeach ?>

	                <?php endif ?>
                </div>
                <div class="sep"><div class="cf"></div></div>
                <div class="tags">

					<?php $temas = get_the_terms(get_the_ID(), 'temas' ); ?>
                	<?php foreach ($temas as $tema): ?>
                		<a class="<?php echo $tema->slug ?>" href="<?php echo get_term_link( $tema->term_id, 'temas' ) ?>"><?php echo $tema->name ?></a>
                	<?php endforeach ?>

                </div>
                <?php if (get_field('archivo')): ?>
                	<a class="download" href="<?php the_field('archivo') ?>">Descargar <?php the_field('tipo_documento') ?></a>
                <?php endif ?>

                <div class="texto"><?php the_content(); ?></div>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>


        </div>

        <div id="posts-relacionados" class="modulo">

            <h3><strong>Más Ideas y Proyectos</strong></h3>

            <?php
            $args = array(
            	'post_type' => 'post',
            	'posts_per_page' => 4,
            	'no_found_rows' => true,
            	'post__not_in' => array(get_the_ID())
            );
            $latest_posts = new WP_Query($args);

            if($latest_posts->have_posts()) : while($latest_posts->have_posts()): $latest_posts->the_post(); ?>

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
	                <div class="autor">
	                <?php if (count($colaboradores) > 1): ?>
	                	<a class="autores-trigger">
	                        <span class="trigger">+</span>
	                        <span class="untrigger">-</span>
	                        <img src="<?php bloginfo('template_url'); ?>/img/autores.jpg">
	                    </a>
	                    <ul class="autores">
	                    	<?php foreach ($colaboradores as $colaborador): ?>
	                    		<li>
		                            <a href="<?php echo get_permalink($colaborador); ?>">
		                                <?php echo get_the_post_thumbnail($colaborador, '130x130'); ?>
		                                <span><?php echo get_the_title($colaborador); ?></span>
		                                <div class="cf"></div>
		                            </a>
		                        </li>
	                    	<?php endforeach ?>
	                    </ul>
	                <?php elseif( is_array($colaboradores) && count($colaboradores) == 1): ?>
	                	<?php foreach ($colaboradores as $colaborador): ?>
	                		<a href="<?php echo get_permalink($colaborador); ?>"><?php echo get_the_post_thumbnail($colaborador, '130x130'); ?></a>
	                	<?php endforeach ?>

	                <?php endif ?>

	                </div>
	                <div class="texto">
	                    <p><?php the_excerpt(); ?></p>
	                </div>
	                <div class="tags">
	                    <?php $temas = get_the_terms(get_the_ID(), 'temas' ); ?>
                    	<?php foreach ($temas as $tema): ?>
                    		<a class="<?php echo $tema->slug ?>" href="<?php echo get_term_link( $tema->term_id, 'temas' ) ?>"><?php echo $tema->name ?></a>
                    	<?php endforeach ?>
	                </div>
	            </div>

	            <div class="cf"></div>

            <?php endwhile;
            wp_reset_postdata();
            endif; ?>


            <a href="<?php bloginfo('wpurl'); ?>/ideas-y-proyectos" class="marco">Ver más <strong>Ideas y Proyectos</strong> &#9662;</a>

            <div class="cf"></div>

        </div>

    </div>

    <div id="banner-dc" class="banda">
        <div class="modulo">

            <h2 id="logo-main"></h2>

            <div class="right">
                <a href="http://dialogos.redparalademocracia.cl">Ir al sitio de Diálogos</a>
                <span>Conoce el proyecto de participación de <strong>RED</strong></span>
            </div>

            <div class="cf"></div>

        </div>
    </div>

</div>

<?php get_footer(); ?>
