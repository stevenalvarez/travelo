<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="jhonny" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    	<title>Escuelas - Idiomas - Idioma Escogido</title>
        
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <!-- include slider.css -->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.magnific-popup.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.custom.file.upload.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.customSelect.min.js"></script>
        <script type="text/javascript" src="js/jquery.custom.file.upload.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.flash.min_.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/nlform.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        
    </head>
    <body>
    	<div id="container">
    		<?php include("includes/header.php"); ?>
    		<div id="content" class="page nopadding">
                <div class="find_your_place">
                    <div class="inner">
                        <div class="info">
                            <h2>Encuentra tu curso de idiomas en el extranjero</h2>
                            <p>Are you looking for English language schools in UK or a english summer school in United Kingdom? Whatever type of English course you are looking for, we will help you find it—and at the lowest possible price! Browse over many English schools in many locations in UK until you find the english course and school that is right for you... <a class="right" href="#">Mas informaci&oacute;n &gt;&gt;</a> </p>
                            <form class="search_language">
                                <input type="text" placeholder="Ingl&eacute;s" value="Ingl&eacute;s" />
                                <select class="course_type">
                                    <option value="">Tipo de curso</option>
                                    <option value="1">Cursos para Adultos y Estudiantes</option>
                                    <option value="2">Cursos de idiomas para Mayores</option>
                                    <option value="3">Cursos de idiomas para Profesionales</option>
                                </select>
                                <select class="destination">
                                    <option value="">Destino</option>
                                    <option value="1" selected="selected">Estados Unidos</option>
                                    <option value="2">Hamburgo</option>
                                    <option value="3">Dresden</option>
                                </select>
                                <input type="text" class="date" placeholder="Start Date" />
                                <select class="weeks">
                                    <option value="">Semanas</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <input class="btn green" type="submit" value="search now" />
                            </form>
                        </div>
                    </div>
                </div><!--.select_country-->
                <div class="select_country select">
                    <div class="inner">
                        <h3 style="margin-bottom: 10px;">Destinos en Estados Unidos</h3>
                        <ul>
                            <li class="big">
                                <a href="#">
                                    <span class="title">Los Angeles</span>
                                </a>
                            </li>
                            <li class="big">
                                <a href="#">
                                    <span class="title">Nueva York</span>
                                </a>
                            </li>
                            <li class="big last">
                                <a href="#">
                                    <span class="title">Miami</span>
                                </a>
                            </li>
                            <li class="big">
                                <a href="#">
                                    <span class="title">San diego</span>
                                </a>
                            </li>
                            <li class="big">
                                <a href="#">
                                    <span class="title">Boston</span>
                                </a>
                            </li>
                            <li class="big last">
                                <a href="#">
                                    <span class="title">Fort</span>
                                </a>
                            </li>
                            <li class="big">
                                <a href="#">
                                    <span class="title">San Francisco</span>
                                </a>
                            </li>
                            <li class="big">
                                <a href="#">
                                    <span class="title">Philadelpha</span>
                                </a>
                            </li>
                            <li class="big last">
                                <a href="#">
                                    <span class="title">Hawai</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--.select_country-->
                <div class="google_map">
                    <div class="inner">
                        <img src="img/google_map.jpg" />
                    </div>
                </div><!--.google_map-->
                <div class="type_course">
                    <div class="inner">
                        <h3>Cual es tu tipo de Curso?</h3>
                        <p style="font-size: 13px;">Los programas van desde una semana en adelante. Elige entre 18 lenguajes en 220 escuelas por todo el mundo</p>
                        <ul>
                            <?php for($i=0; $i<2; $i++):?>
                            <li class="<?php echo $i%2 == 0 ? "odd": "pair"?>">
                                <div class="top">
                                    <img src="img/default_yellow.png" />
                                </div>
                                <div class="bottom padding20">
                                    <a class="title" href="#">English Courses for adults in United Kingdom</a>
                                    <p>Learning English in a English course in United Kingdom for adults can be the best way to learn the language English fast. As you learn English...</p>
                                    <ul class="links">
                                        <li>
                                            <a href="#">Intensitve English Courses in UnitedKingdom >></a>
                                        </li>
                                        <li>
                                            <a href="#">PArt Time English Courses in United Kingdom	</a>
                                        </li>                                        
                                    </ul>
                                    <a class="more">Ver Todos >></a>
                                </div>
                            </li>
                            <?php endfor;?>
                            <?php for($i=0; $i<4; $i++):?>
                            <li class="<?php echo $i%2 == 0 ? "odd": "pair"?>">
                                <div class="box left">
                                    <img src="img/default_yellow.png" />
                                </div>
                                <div class="description left">
                                    <a class="title" href="#">Seat Selection</a>
                                    <p>Whether you would like leg room, a seat with a view or to sit with your family. Whether you would like leg room, a seat with a view or to sit with </p>
                                </div>
                            </li>
                            <?php endfor;?>
                        </ul>
                    </div>
                </div><!--.type_course-->
                <div class="videos school clear">
                    <div class="inner">
                        <h3>Ofertas cursos Ingl&eacute;s en Estados Unidos</h3>
                        <ul id="owl-carousel-videos">
                            <li>
                                <div class="box">
                                    <a class="ajax_popup" href="popup_video.php">
                                        <img src="img/video1.jpg" />
                                        <img class="hover" src="img/vhover.png" />
                                    </a>
                                </div>
                                <div class="items">
                                    <div class="item">
                                        <h4>EF 30% descuento contratando mas de 6 meses!</h4>
                                    </div>
                                    <div class="item">
                                        <span class="city">Brighton</span>,
                                        <span class="country">ENGLAND</span>
                                        <a class="bselect right btn gray" href="#">SELECT</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <a class="ajax_popup" href="popup_video.php">
                                        <img src="img/video2.jpg" />
                                        <img class="hover" src="img/vhover.png" />
                                    </a>
                                </div>
                                <div class="items">
                                    <div class="item">
                                        <h4>2X1 Contratando el año completo con ISE</h4>
                                    </div>
                                    <div class="item">
                                        <span class="city">London</span>,
                                        <span class="country">Malta</span>
                                        <a class="bselect right btn gray" href="#">SELECT</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <a class="ajax_popup" href="popup_video.php">
                                        <img src="img/video3.jpg" />
                                        <img class="hover" src="img/vhover.png" />
                                    </a>
                                </div>
                                <div class="items">
                                    <div class="item">
                                        <h4>Oferta EC 2 meses Gratis!</h4>
                                    </div>
                                    <div class="item">
                                        <span class="city">Satans</span>,
                                        <span class="country">Malta</span>
                                        <a class="bselect right btn gray" href="#">SELECT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="last">
                                <div class="box">
                                    <a class="ajax_popup" href="popup_video.php">
                                        <img src="img/video4.jpg" />
                                        <img class="hover" src="img/vhover.png" />
                                    </a>
                                </div>
                                <div class="items">
                                    <div class="item">
                                        <h4>Oferta EC 2 meses Gratis!</h4>
                                    </div>
                                    <div class="item">
                                        <span class="city">Sant Julians</span>,
                                        <span class="country">Malta</span>
                                        <a class="bselect right btn gray" href="#">SELECT</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <a class="ajax_popup" href="popup_video.php">
                                        <img src="img/video3.jpg" />
                                        <img class="hover" src="img/vhover.png" />
                                    </a>
                                </div>
                                <div class="items">
                                    <div class="item">
                                        <h4>EF 30% descuento contratando mas de 6 meses!</h4>
                                    </div>
                                    <div class="item">
                                        <span class="city">Brighton</span>,
                                        <span class="country">ENGLAND</span>
                                        <a class="bselect right btn gray" href="#">SELECT</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <a class="ajax_popup" href="popup_video.php">
                                        <img src="img/video2.jpg" />
                                        <img class="hover" src="img/vhover.png" />
                                    </a>
                                </div>
                                <div class="items">
                                    <div class="item">
                                        <h4>2X1 Contratando el año completo con ISE</h4>
                                    </div>
                                    <div class="item">
                                        <span class="city">Sliema</span>,
                                        <span class="country">Malta</span>
                                        <a class="bselect right btn gray" href="#">SELECT</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--.videos--->
                <div class="type_course">
                    <div class="inner">
                        <h3>Mejores escuelas de Estados Unidos</h3>
                        <ul>
                            <?php for($i=0; $i<8; $i++):?>
                            <li class="<?php echo $i%2 == 0 ? "odd": "pair"?>">
                                <div class="box left">
                                    <img src="img/default_yellow.png" />
                                </div>
                                <div class="description amount left">
                                    <a class="title" href="#">Seat Selection</a>
                                    <div class="left text">
                                        <p>Tanto si quieres la mejor oferta como si no pues tu mismo si quieres, pero yo que tu lo haria, Tanto si quieres la mejor...</p>
                                    </div>
                                    <div class="right price">
                                        <span class="title">Desde</span>
                                        <span class="euro">30&euro;</span>
                                    </div>
                                </div>
                            </li>
                            <?php endfor;?>
                        </ul>
                    </div>
                </div><!--.type_course-->
    		</div><!--#content-->
            <?php include("includes/footer.php"); ?>
    	</div>
    </body>
</html>