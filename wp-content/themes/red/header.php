<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RED</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
                <li><a href="#"><span class="name">Educación</span><span class="count">104</span></a></li>
                <li><a href="#"><span class="name">Constitución y Reformas Políticas</span><span class="count">70</span></a></li>
                <li><a href="#"><span class="name">Sistema Tributario</span><span class="count">98</span></a></li>
                <li><a href="#"><span class="name">Modelo de Desarrollo y Política Industrial</span><span class="count">54</span></a></li>
                <li><a href="#"><span class="name">Desigualdad y Pobreza</span><span class="count">95</span></a></li>
                <li><a href="#"><span class="name">Salud</span><span class="count">87</span></a></li>
                <li><a href="#"><span class="name">Trabajo y Pensiones</span><span class="count">39</span></a></li>
                <li><a href="#"><span class="name">Energía y Medioambiente</span><span class="count">48</span></a></li>
                <li><a href="#"><span class="name">Comunicaciones y Tecnología</span><span class="count">31</span></a></li>
                <li><a href="#"><span class="name">Ciudad, Territorio y Transporte</span><span class="count">72</span></a></li>
                <li><a href="#"><span class="name">Género y Diversidad</span><span class="count">70</span></a></li>
                <li><a href="#"><span class="name">Derechos Humanos</span><span class="count">90</span></a></li>
                <li><a href="#"><span class="name">Ciencias</span><span class="count">7</span></a></li>
                <li><a href="#"><span class="name">Cultura</span><span class="count">12</span></a></li>
                <li><a href="#"><span class="name">Participación, Democracia y Desarrollo Local</span><span class="count">80</span></a></li>
            </ul>
            <ul class="medios">
                <li><a href="#">Videos</a></li>
                <li><a href="#">Audios</a></li>
                <li><a href="#">Imágenes</a></li>
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

<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5305138424d52b79"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'transparent',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 4
    }   
  });
</script>
<!-- AddThis Smart Layers END -->
