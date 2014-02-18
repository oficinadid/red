<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RED</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>

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

                    <ul class="nav">
                        <li><a href="<?php bloginfo('wpurl'); ?>/about/">About</a></li>
                        <li><a href="<?php bloginfo('wpurl'); ?>/colaboradores/">Colaboradores</a></li>
                        <li><a href="<?php bloginfo('wpurl'); ?>/ideas-y-proyectos/">Ideas y Proyectos</a></li>
                    </ul>

                    <ul class="aux">
                        <li><a href="#" class="facebook"></a></li>
                        <li><a href="#" class="twitter"></a></li>
                        <li><a class="search"></a></li>
                    </ul>

                </div>
            </menu>
            <div id="main-shadow"></div>

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
                    <div class="desc">RED es un centro de estudio y investigación cuyo fin es colaborar con las transformaciones políticas, culturales, sociales y económicas que Chile está enfrentando y enfrentará en los próximos años. Este proyecto nace de la necesidad de generar vínculos entre los diversos actores de la izquierda para pensar en el tipo de país y desarrollo que queremos para el futuro.</div>

                    <a href="#" class="colaboradores">Colaboradores</a>
                </div>

            <?php } else if (is_404()) { ?>

                <div class="wrap">
                    <h1>Lo sentimos; esta página no está disponible</h1>
                    <p>Es posible que el enlace que seguiste esté roto o se haya eliminado la página.</p>

                    <a href="#" class="colaboradores">Home RED</a>
                </div>

            <?php } else {} ?>

            <div id="header-shadow"></div>

        </header>