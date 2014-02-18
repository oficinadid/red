<?php get_header(); ?>

<div id="content" class="single">

    <div id="breadcrumbs" class="modulo first">
        <ul>
            <li>Estás en:</li>
            <li><a href="#">Home</a></li>
            <li>></li>
            <li><a href="#">Noticias</a></li>
            <li>></li>
            <li>Nueva versión disponible del Barómetro de Política...</li>
        </ul>
        <div class="cf"></div>
    </div>

    <div class="stream">

        <div id="post-main" class="modulo post">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="top">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <div class="meta">Diciembre 12, 2013 Paper por <strong>Gonzalo Durán</strong>.</div>
                </div>
                <div class="sep"><div class="cf"></div></div>
                <a class="download" href="#">Descargar Paper</a>
                <div class="texto"><?php the_content(); ?></div>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>


        </div>

        <div id="posts-relacionados" class="modulo">

            <h3><strong>Más Noticias</strong></h3>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 Paper por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
            </div>

            <div class="cf"></div>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 Paper por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
            </div>

            <div class="cf"></div>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 Paper por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
            </div>

            <div class="cf"></div>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 Paper por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
            </div>

            <div class="cf"></div>

            <a href="#" class="marco">Ver más <strong>Noticias</strong> &#9662;</a>

            <div class="cf"></div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
