<?php get_header(); ?>

<div id="content" class="page-default">
    
    <div id="breadcrumbs" class="modulo first">
        <ul>
            <li>Estás en:</li>
            <li><a href="#">Home</a></li>
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
                </div>
                <div class="texto"><?php the_content(); ?></div>

            <?php endwhile; else : endif; ?>

        </div>

    </div>
    
    <div id="banner-dc" class="banda">
        <div class="modulo">

            <h2 id="logo-main"></h2>

            <div class="right">
                <a href="#">Ir al sitio de Diálogos</a>
                <span>Conoce el proyecto de participación de <strong>RED</strong></span>
            </div>

            <div class="cf"></div>

        </div>
    </div>

</div>

<?php get_footer(); ?>