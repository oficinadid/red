<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <a class="menuside-trigger"></a>

        <nav id="side" class="panel" role="navigation">
            <h3>Bienvenido a <strong>RED</strong></h3>
            <h4>Temas</h4>
            <ul class="temas">
            	<?php switch_to_blog( 1 ); $temas = get_terms('temas');  ?>
            		<?php foreach ($temas as $tema): ?>
            			<li><a href="<?php echo get_term_link( intval($tema->term_id), 'temas' ); ?>"><span class="name"><?php echo $tema->name ?></span><span class="count"><?php echo $tema->count ?></span></a></li>
            		<?php endforeach ?>

          		<?php restore_current_blog(); ?>

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
                    <form action="http://redparalademocracia.cl" method="get">
                        <input type="text" id="field" name="s">
                    </form>
                </div>
            </div>

            <menu id="secondary">
                <div class="wrap">

                    <h2 id="logo-dc"><a href="<?php bloginfo('wpurl'); ?>"></a></h2>

                    <ul class="nav">
                        <li><a href="#about">About</a></li>
                        <li><a href="#participacion" class="scroll-to">Participación</a></li>
                        <li><a href="#noticias" class="scroll-to">Noticias</a></li>
                        <li><a href="#documentos" class="scroll-to">Documentos</a></li>
                    </ul>

                    <div class="search">
                    	<form action="<?php bloginfo('url'); ?>" method="get">
                        	<input type="text" id="query" name="s" placeholder="| Búsqueda en Diálogos... ">
                        	<input id="button" type="submit" value="">
                    	</form>


                    </div>

                    <div class="cf"></div>

                </div>
            </menu>

        </div>

        <header>

            <h1 id="logo-main"></h1>

        </header>