<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="jhonny" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    	<title>Escuelas - Idiomas - Resultados</title>
        
        <link rel="stylesheet" type="text/css" href="css/reset.css"/>
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
    		<div id="content" class="page">
                <div class="inner">
                    <div class="widget left">
                        <div class="padding20 bwhite mbttom30 overflow">
                            <h4>Refina tu b&uacute;squeda</h4>
                            <form class="search_again fresults">
                                <label style="line-height: 20px;">TIPO DE CURSO</label>
                                <select class="generic">
                                    <option value="1">Cursos para Adultos y Estudiantes</option>
                                    <option value="2">Cursos de idiomas para Mayores</option>
                                    <option value="3">Cursos de idiomas para Profesionales</option>
                                </select>
                                <label style="line-height: 20px;">DESTINO</label>
                                <select class="generic">
                                    <option value="1">Madrid</option>
                                    <option value="2">Hamburgo</option>
                                    <option value="3">Dresden</option>
                                </select>
                                <label style="padding-top: 5px;">FECHA</label>
                                <input class="calendar" type="text" placeholder="TODOS" />
                                <div class="" style="width: 92%;padding-bottom: 40px;">
                                    <div class="cols3 left">
                                        <label style="line-height: 25px;">SEMANAS</label>
                                        <select class="generic">
                                            <option value="">Todos</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="cols3 right">
                                        <label style="line-height: 25px;">ESTUDIANTES</label>
                                        <select class="generic">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <button>BUSCAR</button>
                            </form>
                        </div>
                        <div class="padding20 bwhite mbttom30 overflow" style="border: 1px solid #df2133;">
                            <?php
                                $refine = array(
                                    "Tipo de curso" => array("Clases Individuales de Español", "Español General + Conversacion", "Español General", "Español Grupal + Individuales"),
                                    "Calificación Final" => array("Diplomas de Español como lengua Extranjera (DELE)"),
                                    "Nivel del Idioma" => array("Principiante","Elemental - Nivel A1", "Pre-intermedio Nivel A2", "Intermedio - Nivel B1", "Intermedio Superior - Nivel B2", "Avanzado - Nivel C1", "Profesional - Nivel C2"),
                                    "Rangos de Precios (por semana)" => array("1-99", "100-199", "200-299", "300-399", "400-599", "600-699", "1000+"),
                                    "Clases Semanales" => array("1-9", "10-14", "15-19", "20-24", "25-29", "30-34", "35+"),
                                    "Estudiantes por Clase" => array("1-4", "5-9", "10-14", "15-19"),
                                );
                            ?>
                            <form class="refine">
                                <?php foreach($refine as $key => $item):?>
                                    <h4><?php echo $key; ?></h4>
                                    <?php $key = strtolower(str_replace(" ","",preg_replace('/\&(.)[^;]*;/', '\\1', strtr($key,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'))));?>
                                    <ul class="<?php echo $key;?>">
                                        <?php foreach($item as $j => $i):;?>
                                        <li>
                                            <input class="left" type="checkbox" id="<?php echo $key.$j;?>" />
                                            <label for="<?php echo $key.$j;?>"><?php echo $i; ?></label>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                <?php endforeach;?>
                            </form>
                        </div>
                        <div class="padding20 bwhite mbttom30 overflow">
                            <h4>Mapa escuelas</h4>
                            <div class="top_ciudades">
                                <div class="map">
                                    <img src="img/map.jpg" />
                                </div>
                            </div>
                        </div>
                    </div><!--.widget-->
                    <div class="cols2 right">
                        <div class="description">
                            <p><b class="vowel left">A</b>prender Español en un curso de Español en Madrid para los adultos es la mejor manera de aprender el idioma Español rápidamente. A medida que aprenda el español, viajando a Madrid será mucho más agradable. Incluso con un conocimiento limitado de Español va a mejorar su experiencia  completa de viaje en Madrid. Se ha demostrado que la inmersión completa en Madrid con un entorno de idioma Español va a acelerar el ritmo al que se aprende el idioma Español. Además de los beneficios de aprender el Español más rápido, tu también vas a aprender el idioma Español mientras disfrutas de conocer Madrid mientras estudias y tenies una experiencia cultural maravillosa.</p>
                            <p>Se ha demostrado que la inmersión completa en Madrid con un entorno de idioma Español va a acelerar el ritmo al que se aprende el idioma Español. Además de los beneficios de aprender el Español más rápido, tu también vas a aprender el idioma Español mientras disfrutas de conocer Madrid mientras estudias y tenies una experiencia cultural maravillosa.</p>
                            <br />
                            <br />
                        </div>
                        <div class="padding20 bwhite mbttom30 overflow filtro">
                            <div class="left">
                                <label>Ordenar resultados por:</label>
                                <select class="bnombre" name="bnombre">
                                    <option>Nombre</option>
                                </select>
                                &nbsp;
                                &nbsp;
                                <select class="bprecio" name="bprecio">
                                    <option>Precio</option>
                                </select>
                            </div>
                        </div><!--.filtro-->
                        <ul class="jobs">
                            <li>
                                <div class="top clear overflow">
                                    <div class="left">
                                        <div class="box left">
                                            <img src="img/jobs1.png" />
                                        </div>
                                        <div class="right info">
                                            <h5>Legal Secretary</h5>
                                            <span>BRIGHTON, UK</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="flag none">CRIMSONWING</span>
                                        <a class="add_favorites" href="javascript:void(0)" title="añadir a favoritos">añadir a favoritos</a>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="top clear overflow">
                                    <div class="left">
                                        <div class="box left">
                                            <img src="img/jobs1.png" />
                                        </div>
                                        <div class="right info">
                                            <h5>Legal Secretary</h5>
                                            <span>BRIGHTON, UK</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="flag none">CRIMSONWING</span>
                                        <a class="add_favorites" href="javascript:void(0)" title="añadir a favoritos">añadir a favoritos</a>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="top clear overflow">
                                    <div class="left">
                                        <div class="box left">
                                            <img src="img/jobs1.png" />
                                        </div>
                                        <div class="right info">
                                            <h5>Legal Secretary</h5>
                                            <span>BRIGHTON, UK</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="flag none">CRIMSONWING</span>
                                        <a class="add_favorites" href="javascript:void(0)" title="añadir a favoritos">añadir a favoritos</a>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="top clear overflow">
                                    <div class="left">
                                        <div class="box left">
                                            <img src="img/jobs1.png" />
                                        </div>
                                        <div class="right info">
                                            <h5>Legal Secretary</h5>
                                            <span>BRIGHTON, UK</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="flag none">CRIMSONWING</span>
                                        <a class="add_favorites" href="javascript:void(0)" title="añadir a favoritos">añadir a favoritos</a>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="top clear overflow">
                                    <div class="left">
                                        <div class="box left">
                                            <img src="img/jobs1.png" />
                                        </div>
                                        <div class="right info">
                                            <h5>Legal Secretary</h5>
                                            <span>BRIGHTON, UK</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="flag none">CRIMSONWING</span>
                                        <a class="add_favorites" href="javascript:void(0)" title="añadir a favoritos">añadir a favoritos</a>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="top clear overflow">
                                    <div class="left">
                                        <div class="box left">
                                            <img src="img/jobs1.png" />
                                        </div>
                                        <div class="right info">
                                            <h5>Legal Secretary</h5>
                                            <span>BRIGHTON, UK</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="flag none">CRIMSONWING</span>
                                        <a class="add_favorites" href="javascript:void(0)" title="añadir a favoritos">añadir a favoritos</a>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="top clear overflow">
                                    <div class="left">
                                        <div class="box left">
                                            <img src="img/jobs1.png" />
                                        </div>
                                        <div class="right info">
                                            <h5>Legal Secretary</h5>
                                            <span>BRIGHTON, UK</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="flag none">CRIMSONWING</span>
                                        <a class="add_favorites" href="javascript:void(0)" title="añadir a favoritos">añadir a favoritos</a>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="top clear overflow">
                                    <div class="left">
                                        <div class="box left">
                                            <img src="img/jobs1.png" />
                                        </div>
                                        <div class="right info">
                                            <h5>Legal Secretary</h5>
                                            <span>BRIGHTON, UK</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="flag none">CRIMSONWING</span>
                                        <a class="add_favorites" href="javascript:void(0)" title="añadir a favoritos">añadir a favoritos</a>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="top clear overflow">
                                    <div class="left">
                                        <div class="box left">
                                            <img src="img/jobs1.png" />
                                        </div>
                                        <div class="right info">
                                            <h5>Legal Secretary</h5>
                                            <span>BRIGHTON, UK</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <span class="flag none">CRIMSONWING</span>
                                        <a class="add_favorites" href="javascript:void(0)" title="añadir a favoritos">añadir a favoritos</a>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                        </ul><!--.jobs-->
                        <a class="load_more" href="#">Load More Results</a>
                        <div class="receive_alertas padding20 overflow">
                            <div class="left">
                                <span class="text">Suscribete a nuestras Ofertas</span>
                            </div>
                            <div class="right">
                                <p>Suscribete a las alertas de Email con nosotros y recibe el newsletter actualizado</p>
                                <form class="dform" style="width: 70%;overflow: hidden;">
                                    <input type="text" placeholder="your email" class="left"/>
                                    <button class="left check">Send</button>
                                </form>
                                <span class="clear" style="margin-top: 10px;display: block;">Aceptas las <b>politicas de datos de Expats</b>, asi como el uso de las  <b>cookies</b>.</span>
                            </div>
                        </div>
                    </div><!--.cols2-->
                </div><!--.inner-->
    		</div><!--#content-->
            <?php include("includes/footer.php"); ?>
    	</div>
    </body>
</html>