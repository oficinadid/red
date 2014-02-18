<?php
/*
Template Name: Single Colaborador
*/
?>

<?php get_header(); ?>

<div id="content" class="page-single-colaborador">

    <div id="breadcrumbs" class="modulo first">
        <ul>
            <li>Estás en:</li>
            <li><a href="#">Home</a></li>
            <li>></li>
            <li><a href="#">Colaboradores</a></li>
            <li>></li>
            <li><?php the_title(); ?></li>
        </ul>
        <a href="#" class="filtro">Listado de Colaboradores</a>
        <div class="cf"></div>
    </div>

    <div class="stream">

        <div id="perfil" class="modulo post">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="pic">
                    <a href="#"><?php the_post_thumbnail('90x90'); ?></a>
                </div>
                <div class="datos">
                    <h5><a href="#"><?php the_title(); ?></a></h5>
                    <h6><?php the_field('about') ?></h6>
                </div>
                <div class="cf"></div>
                <div class="texto"><?php the_content(); ?></div>

                <div class="publicaciones">
                    <h4>Publicaciones del colaborador.</h4>
                    <ul>
                        <div class="tags"><a class="educacion" href="#">Educación</a></div>
                        <li><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></li>
                        <li><a href="#">Some Thoughts on Social Cohesion in Latin America.</a></li>
                        <li><a href="#">Cohesión Social Latinoamericana.</a></li>
                        <li><a href="#">Redes, Estado y Mercado. Soportes de la cohesión social latinoamericana.</a></li>
                    </ul>
                    <ul>
                        <div class="tags"><a class="desarrollo" href="#">MODELO DE DESARROLLO Y POLÍTICA</a></div>
                        <li><a href="#">Nueva versión disponible del Barómetro de Política y Equidad.</a></li>
                        <li><a href="#">Some Thoughts on Social Cohesion in Latin America.</a></li>
                    </ul>
                </div>

            <?php endwhile; else : endif; ?>

        </div>

        <div id="colaboradores" class="modulo">
            <h3><strong>Más Colaboradores</strong></h3>
            <ul class="lista half columnas">
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Gustavo Astorga Parraguez</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">María Jesus Villa</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="constitucion" href="#">Constitucion</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">David Banda</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                        <a class="educacion" href="#">Educación</a>
                        <a class="desigualdad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Valentina Vargas</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="salud" href="#">Educación</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Leonardo Garetto</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="energia" href="#">Educación</a>
                        <a class="ciudad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Gustavo Astorga Parraguez</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">María Jesus Villa</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="constitucion" href="#">Constitucion</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">David Banda</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                        <a class="educacion" href="#">Educación</a>
                        <a class="desigualdad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Valentina Vargas</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="salud" href="#">Educación</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Leonardo Garetto</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="energia" href="#">Educación</a>
                        <a class="ciudad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Gustavo Astorga Parraguez</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">María Jesus Villa</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="constitucion" href="#">Constitucion</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">David Banda</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                        <a class="educacion" href="#">Educación</a>
                        <a class="desigualdad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Valentina Vargas</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="salud" href="#">Educación</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Leonardo Garetto</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="energia" href="#">Educación</a>
                        <a class="ciudad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">María Jesus Villa</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="constitucion" href="#">Constitucion</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Gustavo Astorga Parraguez</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Leonardo Garetto</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="energia" href="#">Educación</a>
                        <a class="ciudad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">David Banda</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                        <a class="educacion" href="#">Educación</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Valentina Vargas</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="salud" href="#">Educación</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Leonardo Garetto</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="energia" href="#">Educación</a>
                        <a class="ciudad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">María Jesus Villa</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="constitucion" href="#">Constitucion</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">María Jesus Villa</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="constitucion" href="#">Constitucion</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">David Banda</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                        <a class="educacion" href="#">Educación</a>
                        <a class="desigualdad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Gustavo Astorga Parraguez</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Valentina Vargas</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="salud" href="#">Educación</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">David Banda</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                        <a class="educacion" href="#">Educación</a>
                        <a class="desigualdad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Valentina Vargas</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="salud" href="#">Educación</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Leonardo Garetto</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="energia" href="#">Educación</a>
                        <a class="ciudad" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pic">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/autor1.jpg"></a>
                </div>
                <div class="datos">
                    <h5><a href="#">Gustavo Astorga Parraguez</a></h5>
                    <h6>Arquitecto ajsdhalsd</h6>
                    <div class="tags">
                        <a class="educacion" href="#">Educación</a>
                        <a class="genero" href="#">Modelo de Desarrollo y Política Industrial</a>
                    </div>
                </div>
            </li>
        </ul>
            <a href="#" class="marco">Ver más <strong>Colaboradores</strong> &#9662;</a>
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