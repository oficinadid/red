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

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Colaboradores</a></li>
                    <li><a href="#">Ideas y Proyectos</a></li>
                </ul>
            </div>

            <div id="searchbox">
                <div class="wrap">
                    <form>
                        <input type="text" id="field">
                    </form>
                </div>
            </div>

        </div>

        <header>

            <?php if (is_home()) { ?>

                <h1 id="logo-main"></h1>

                <div class="wrap">
                    <div class="sep"></div>

		    		<div class="desc"><?php the_field('que_es_red', 'option') ?></div>

		    		<a href="<?php bloginfo('wpurl'); ?>/colaboradores" class="colaboradores">Colaboradores</a>

                </div>

            <?php } else if (is_404()) { ?>

                <div class="wrap">
                    <h1>Lo sentimos; esta página no está disponible</h1>
                    <p>Es posible que el enlace que seguiste esté roto o se haya eliminado la página.</p>


		    		<a href="<?php bloginfo('wpurl'); ?>" class="colaboradores">Home RED</a>

                </div>

            <?php } else {} ?>

            <div id="header-shadow"></div>

        </header>

         <?php if (wpmd_is_notdevice()): ?>

            <!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_floating_style addthis_32x32_style" style="left:50px;top:50px;">
			<a class="addthis_button_facebook"></a>
			<a class="addthis_button_email"></a>
			<a class="addthis_button_twitter"></a>
			<a class="addthis_button_print"></a>
			<a class="addthis_button_compact"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script>
			<!-- AddThis Button END -->

        <?php else: endif ?>
