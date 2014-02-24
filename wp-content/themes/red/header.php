<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RED</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

         <link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/favicon.jpg" />

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>


        <a class="menuside-trigger"></a>

        <nav id="side" class="panel" role="navigation">
            <h3>Bienvenido a <strong>RED</strong></h3>
            <h4>Temas</h4>
            <ul class="temas">
            	<?php $temas = get_terms('temas'); foreach ($temas as $tema): ?>
            		<li><a href="<?php echo get_term_link( $tema, 'temas' ); ?> "><span class="name"><?php echo $tema->name ?></span><span class="count"><?php echo $tema->count ?></span></a></li>
            	<?php endforeach ?>

            </ul>

        </nav>

        <div id="toplayer">

            <menu id="main">
                <div class="wrap">

                    <a href="<?php bloginfo('wpurl'); ?>" class="logo"></a>

                    <?php if (wpmd_is_notphone()): ?>

                        <ul class="nav">
                            <li><a href="<?php bloginfo('wpurl'); ?>/about/">About</a></li>
                            <li><a href="<?php bloginfo('wpurl'); ?>/colaboradores/">Colaboradores</a></li>
                            <li><a href="<?php bloginfo('wpurl'); ?>/ideas-y-proyectos/">Ideas y Proyectos</a></li>
                        </ul>

                    <?php elseif (wpmd_is_phone()): ?>

                        <a id="mobilemenu-trigger">Menu</a>

                    <?php endif ?>

                    <ul class="aux">
                        <li><a href="#" class="facebook"></a></li>
                        <li><a href="#" class="twitter"></a></li>
                        <li><a class="search"></a></li>
                    </ul>

                </div>
            </menu>
            <div id="main-shadow"></div>

            <div id="menu-mobile">
                <ul>
                    <li><a href="<?php bloginfo('wpurl'); ?>">Home</a></li>
                    <li><a href="<?php bloginfo('wpurl'); ?>/about/">About</a></li>
                    <li><a href="<?php bloginfo('wpurl'); ?>/colaboradores/">Colaboradores</a></li>
                    <li><a href="<?php bloginfo('wpurl'); ?>/ideas-y-proyectos/">Ideas y Proyectos</a></li>
                </ul>
            </div>

            <div id="searchbox">
                <div class="wrap">
                    <form action="<?php bloginfo('url'); ?>" method="get">
                        <input type="text" id="field" name="s">
                    </form>
                </div>
            </div>

        </div>

        <header>

			<?php if (is_home()): ?>
				<h1 id="logo-main"></h1>

                <div class="wrap">
                    <div class="sep"></div>

		    		<div class="desc"><?php the_field('que_es_red', 'option') ?></div>

		    		<a href="<?php bloginfo('wpurl'); ?>/colaboradores" class="colaboradores">Colaboradores</a>

                </div>

			<?php elseif (is_404()): ?>
				<div class="wrap">
                    <h1>Lo sentimos; esta página no está disponible</h1>
                    <p>Es posible que el enlace que seguiste esté roto o se haya eliminado la página.</p>


		    		<a href="<?php bloginfo('wpurl'); ?>" class="colaboradores">Home RED</a>

                </div>

			<?php else: ?>

			<?php endif ?>


            <div id="header-shadow"></div>

        </header>
