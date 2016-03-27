<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="es" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="es" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="es" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html lang="es" class="no-js lt-ie10"> <![endif]-->
<html class="no-js" lang="es">
	<head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv='cache-control' content='no-cache' />
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />

		<meta class="temp" name="description" content="meta-content"/>
		<meta class="temp" name="copyright"content="© Copyright 2016 CORE WEB">
		<meta class="temp" name="robots" content="index, follow">
		<link class="temp" rel="alternate" hreflang="es" href="http://url" />

		<title id="head-change-section-title">home</title>

        <link href="../css/import.css" rel="stylesheet" type="text/css" />

        <script>
            var nav = navigator.appName;

            if(nav == "Microsoft Internet Explorer"){
                // Detectamos si nos visitan desde IE
                if(nav == "Microsoft Internet Explorer"){
                    // Convertimos en minusculas la cadena que devuelve userAgent
                    var ie = navigator.userAgent.toLowerCase();
                    // Extraemos de la cadena la version de IE
                    var version = parseInt(ie.split('msie')[1]);

                    // Dependiendo de la version mostramos un resultado
                    switch(version){
                        case 6:
                            alert("Estas usando IE 6, es obsoleto. \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        case 7:
                            alert("Estas usando IE 7, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        case 8:
                            alert("Estas usando IE 8, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        /*case 9:
                            alert("Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v10 y v11 ");
                            console.log("Estas usando IE 9, mas o menos compatible");
                            break;*/
                        default:
                            console.log("Usas una version compatible");
                            break;
                    }
                }
            }
        </script>
        <?php /*
        <script src="../lib/modernizr.js"></script>
        */ ?>
	</head>
	<body class="sitio" id="index">

        <!-- Template Wrapper Navbar -->
        <div class="wrapper_content_navbar" id="start-site-header">
            <header id="content-start-site-navbar" class="navbar navigation-bar-header nav-content">
                <div class="container container-site sp-cont">
                    <a href="#" class="visible-sm visible-xs mobile-toggle" id="menu-toggle">
                        <div class="bar-1"></div>
                        <div class="bar-2"></div>
                    </a>
                    <a href="#" class="visible-xs-home-link visible-sm visible-xs" id="go-home-logo-resp">
                        <img src="../img/logo/logo-large-2x.png" alt="Logo Land Rover" class="logo">
                    </a>
                    <!-- Main Navigation -->
                    <nav class="main-navigation toggle-menu navigation-bar no-print clearfix" rol="navigation">
                        <div class="block-logo clearfix">
                            <a href="#" class="home-link main-navigation-home-link no-print" id="go-home-logo">
                                <img src="../img/logo/logo-large-2x.png" alt="Logo Land Rover" class="logo no-print">
                                <span class="primary-text">Guadalajara y Country</span>
                            </a>
                        </div>
                        <div class="block-nav">
                            <ul class="sf-menu navigation-bar no-print">
                                <li>
                                    <a href="#" class="menu-toggle-close" id="go-home">Inicio</a>
                                </li>
                                <li>
                                    <a href="#" class="menu-toggle-close" id="go-vehicles">Vehículos</a>
                                    <div class="model-select-block">
                                        <div class="inner-nav">
                                            <ul class="inner-model inner-menu" rol="menu">
                                                <li class="model-list">
                                                    <a href="#" class="model-link" id="model-defender">
                                                        <img src="../img/modelos/small/defender.png" width="130" height="75" alt="Modelo Defender">
                                                        <span class="model defender">Defender</span>
                                                    </a>
                                                </li>
                                                <li class="model-list">
                                                    <a href="#" class="model-link" id="model-discovery-sport">
                                                        <img src="../img/modelos/small/discovery-sport.png" width="130" height="75" alt="Modelo Discorey Sport">
                                                        <span class="model discovery-sport">Discovery Sport</span>
                                                    </a>
                                                </li>
                                                <li class="model-list">
                                                    <a href="#" class="model-link" id="model-discovery">
                                                        <img src="../img/modelos/small/discovery.png" width="130" height="75" alt="Modelo Discorey">
                                                        <span class="model discovery">Discovery</span>
                                                    </a>
                                                </li>
                                                <li class="model-list">
                                                    <a href="#" class="model-link" id="model-range-rover-evoque">
                                                        <img src="../img/modelos/small/range-rover-evoque.png" width="130" height="75" alt="Modelo Range Rover Evoque">
                                                        <span class="model range-rover-evoque">Range Rover Evoque</span>
                                                    </a>
                                                </li>
                                                <li class="model-list">
                                                    <a href="#" class="model-link" id="model-range-rover-sport">
                                                        <img src="../img/modelos/small/range-rover-sport.png" width="130" height="75" alt="Modelo Range Rover Sport">
                                                        <span class="model range-rover-sport">Range Rover Sport</span>
                                                    </a>
                                                </li>
                                                <li class="model-list">
                                                    <a href="#" class="model-link" id="model-range-rover">
                                                        <img src="../img/modelos/small/range-rover.png" width="130" height="75" alt="Modelo Range Rover">
                                                        <span class="model range-rover">Range Rover</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="menu-toggle-close" id="go-news">Noticias</a>
                                </li>
                                <li>
                                    <a href="#" class="menu-toggle-close" id="go-services">Servicios</a>
                                </li>
                                <li>
                                    <a href="#" class="menu-toggle-close" id="go-agencies">Agencias</a>
                                    <ul class="inner-agencie inner-menu" rol="menu">
                                        <li class="agencie-list">
                                            <a href="#" id="agencie-gdl" class="agencie-link">
                                                <div class="agencie-title agencie">
                                                    <span class="agencie">Land Rover GDL</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="agencie-list">
                                            <a href="#" id="agencie-country" class="agencie-link">
                                                <div class="agencie-title agencie">
                                                    <span class="agencie">Land Rover Country</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="agencie-list">
                                            <a href="#" id="schedule-test.drive" class="agencie-link">
                                                <div class="agencie-title agencie">
                                                    <span class="agencie">Prueba de Manejo</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="block-socials">
                            <ul class="social-links">
                                <li>
                                    <a href="https://www.facebook.com/LandroverGDL" target="_blank"><i class="social_facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/LandRoverGDL" target="_blank"><i class="social_twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UC-ZX8q42L4v0D_xXc_D4_lg" target="_blank"><i class="social_youtube"></i></a>
                                </li>
                                <li>
                                    <a href="http://instagram.com/LandRoverGuadalajara" target="_blank"><i class="social_instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
        </div>

        <?php /*
        <!--<a id="go-home">Inicio</a>
        <a id="go-contact">Contacto</a>-->
		<!-- Auxiliar Temporal Inputs's DIV -->
    	<div id='hidden-inputs-session'></div>
    	<!-- Auxiliar Temporal Inputs's DIV -->
    	<div id='hidden-inputs-temporal'></div>
    	<!--Templates's DIV-->
    	<div class="wrapper_content_interactive_home" id='content-temporal-interactive-home'></div>
        */ ?>

		<!-- MAIN -->
		<script src="../lib/jquery.js"></script>
		<script src="../lib/modernizr.js"></script>
		<script src="../lib/bootstrap.js"></script>

        <!-- CORE -->
        <script src="../lib/jquery.gdb.js"></script>
        <script src="../lib/jquery-ui.js"></script>
		<script src="../lib/underscore.js"></script>
		<script src="../lib/moment.js"></script>
		<script src="../lib/accounting.js"></script>
		<?php /*
        <script src="../lib/finch.js"></script>
        */ ?>
		<!-- HANDLEBARS -->
        <script src="../lib/handlebars.runtime.js"></script>
		<!-- TEMPLATES -->
		<script src='../templates/min/templates.min.js'></script>
		<!-- FORMS -->
		<script src="../lib/forms.js"></script>
		<script src="../lib/sha512.js"></script>
		<!-- PLUGINS -->
        <script src="../lib/plugins/waypoints.js"></script>
        <script src="../lib/plugins/waypoints-sticky.js"></script>
		<!-- CORE JS -->
        <?php /*
        <script src='js/min/core.min.js'></script>
        <script src='../home/js/min/room.min.js'></script>
        */ ?>
	    <script src='../js/objects.js'></script>
	    <script src='../js/method.js'></script>
	    <script src='../js/model.js'></script>
        <script src='../js/main.js'></script>
        <!-- SECTION HOME -->
        <script src='../home/js/room.js'></script>
	</body>
</html>

