<?php get_header(); ?>

<div id="content" class="single">
    
    <div id="breadcrumbs" class="modulo first">
        <ul>
            <li>Estás en:</li>
            <li><a href="#">Home</a></li>
            <li>></li>
            <li><a href="#">Ideas y Proyectos</a></li>
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
                    <div class="meta">Diciembre 12, 2013 Paper por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="autor">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="sep"><div class="cf"></div></div>
                <div class="tags">
                    <a class="educacion" href="#">Educación</a>
                    <a class="tributario" href="#">Modelo de Desarrollo y Política Industrial</a>
                </div>
                <a class="download" href="#">Descargar Paper</a>
                <div class="texto"><?php the_content(); ?></div>

            <?php endwhile; else : endif; ?>

        </div>

        <div id="posts-relacionados" class="modulo">

            <h3><strong>Más Ideas y Proyectos</strong></h3>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 Paper por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="autor">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
                <div class="tags">
                    <a class="educacion" href="#">Educación</a>
                    <a class="tributario" href="#">Modelo de Desarrollo y Política Industrial</a>
                </div>
            </div>

            <div class="cf"></div>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 Paper por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="autor">
                    <a class="autores-trigger">
                        <span class="trigger">+</span>
                        <span class="untrigger">-</span>
                        <img src="<?php bloginfo('template_url'); ?>/img/autores.jpg">
                    </a>
                    <ul class="autores">
                        <li>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg">
                                <span>Carmen Durán. E</span>
                                <div class="cf"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg">
                                <span>Carmen Durán. E</span>
                                <div class="cf"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg">
                                <span>Carmen Durán. E</span>
                                <div class="cf"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
                <div class="tags">
                    <a class="educacion" href="#">Educación</a>
                    <a class="tributario" href="#">Modelo de Desarrollo y Política Industrial</a>
                </div>
            </div>

            <div class="cf"></div>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 Paper por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="autor">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
                <div class="tags">
                    <a class="educacion" href="#">Educación</a>
                    <a class="tributario" href="#">Modelo de Desarrollo y Política Industrial</a>
                </div>
            </div>

            <div class="cf"></div>

            <div class="post">
                <div class="top">
                    <h2 class="title"><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></h2>
                    <div class="meta">Diciembre 12, 2013 Paper por <a href="#">Gonzalo Durán</a>.</div>
                </div>
                <div class="autor">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="texto">
                    <p>Chile está enfrentando y enfrentará en los próximos años. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar. RED es un proyecto para pensar en el tipo de país y desarrollo que queremos y así transformar Chile en una sociedad más justa, igualitaria y democrática.</p>
                </div>
                <div class="tags">
                    <a class="educacion" href="#">Educación</a>
                    <a class="tributario" href="#">Modelo de Desarrollo y Política Industrial</a>
                </div>
            </div>

            <div class="cf"></div>

            <a href="#" class="marco">Ver más <strong>Ideas y Proyectos</strong> &#9662;</a>

            <div class="cf"></div>

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