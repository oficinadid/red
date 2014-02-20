<?php get_header(); ?>

<div id="content" class="single">

    <div id="breadcrumbs" class="modulo first">
        <ul>
            <li>Estás en:</li>
            <li><a href="#">Home</a></li>
            <li>></li>
            <li><a href="#">Noticias</a></li>
            <li>></li>
            <li><?php the_title(); ?></li>
        </ul>
        <div class="cf"></div>
    </div>

    <div class="stream">

        <div id="post-main" class="modulo post">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="top">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <div class="meta"><?php the_time('F j, Y'); ?>
					<?php if (get_field('autor')): ?>
						por <strong><?php the_field('autor') ?></strong>.
					<?php endif ?>
                    </div>
                </div>
                <div class="sep"><div class="cf"></div></div>
                <!-- <a class="download" href="#">Descargar Paper</a> -->
                <div class="texto"><?php the_content(); ?></div>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>


        </div>

        <div id="posts-relacionados" class="modulo">

            <h3><strong>Más Noticias</strong></h3>

            <?php
            $args = array(
            	'post_type' => 'post',
            	'post__not_in' => array(get_the_ID()),
            	'posts_per_page' => 4,
            	'no_found_rows' => true
            );
            $mas_posts = new WP_Query($args);

            if($mas_posts->have_posts()) : while($mas_posts->have_posts()): $mas_posts->the_post(); ?>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#"><?php the_title(); ?></a></h2>
                    <div class="meta"><?php the_time('F j, Y'); ?>
					<?php if (get_field('autor')): ?>
						por <strong><?php the_field('autor') ?></strong>.
					<?php endif ?>
                    </div>
                </div>
                <div class="texto">
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
            <div class="cf"></div>
            <?php endwhile;
            wp_reset_postdata();
            endif; ?>



            <a href="#" class="marco">Ver más <strong>Noticias</strong> &#9662;</a>

            <div class="cf"></div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
