<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="jhonny" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    	<title>Jobs</title>
        
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
    		<div id="content" class="page">
                <div class="inner">
                    <div class="widget left">
                        <div class="padding20 bwhite mbttom30 overflow">
                            <h4>Refina tu b&uacute;squeda</h4>
                            <form class="search_again">
                                <label>NOMBRE DEL TRABAJO</label>
                                <input type="text" placeholder="Ej. Informatico" />
                                <label>HABILIDADES / PALABRA CLAVE</label>
                                <input type="text" placeholder="Ej. ingles, software" />
                                <label>DESTINO</label>
                                <input type="text" placeholder="ciudad, pais, zona" />
                                <button>BUSCAR TRABAJOS</button>
                            </form>
                        </div>
                        <div class="padding20 bwhite mbttom30 overflow">
                            <span class="results" style="font-size: 14px;"><b>1,984</b> trabajos encontrados.</span>
                        </div>
                        <div class="padding20 bwhite mbttom30 overflow">
                            <h4>TOP ciudades</h4>
                            <div class="top_ciudades">
                                <div class="map">
                                    <img src="img/map.jpg" />
                                </div>
                                <span class="text">Top ciudades contratando <b>Ventas</b></span>
                                <ul class="more_results">
                                    <li>
                                        <label>London</label><span>(5,935)</span>
                                    </li>
                                    <li>
                                        <label>Manchester</label><span>(1,556)</span>
                                    </li>
                                    <li>
                                        <label>Bristol</label><span>(256)</span>
                                    </li>
                                    <li>
                                        <label>Leeds</label><span>(459)</span>
                                    </li>
                                    <li>
                                        <label>Liverpool</label><span>(659)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>                        
                        <div class="padding20 bwhite mbttom30 overflow">
                            <h4>Trabajos por Sector</h4>
                            <div class="trabajos">
                                <ul class="advanced_search">
                                    <li>
                                        <a lang="camarera" title="Camarera" href="javascript:void(0)">
                                            <span>Camarera</span><span class="number">(722)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a lang="hotel" title="Hotel" href="javascript:void(0)">
                                            <span>Hotel</span><span class="number">(982)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a lang="marketing" title="Marketing" href="javascript:void(0)">
                                            <span>Marketing</span><span class="number">(127)</span>
                                        </a>
                                    </li>
                                    <li class="selected">
                                        <a lang="ventas" title="Ventas" href="javascript:void(0)">
                                            <span>Ventas</span><span class="number">(222)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a lang="software" title="Software" href="javascript:void(0)">
                                            <span>Software</span><span class="number">(158)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a lang="rrpp" title="Rrpp" href="javascript:void(0)">
                                            <span>Rrpp</span><span class="number">(439)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a lang="manager" title="Manager" href="javascript:void(0)">
                                            <span>Manager</span><span class="number">(52)</span>
                                        </a>
                                    </li>
                                </ul>
                                <br class="clear"/>
                                <a title="MAS" href="javascript:void(0)" class="lmore btn green">MAS</a>
                            </div>
                        </div>
                        <div class="padding20 bwhite mbttom30 overflow magnifier">
                            <h4>B&uacute;squeda m&aacute;s populares</h4>
                            <div class="populares">
                                <ul>
                                    <li>
                                        <a href="#">Camarero Londres</a>
                                    </li>
                                    <li>
                                        <a href="#">Java Londre</a>
                                    </li>
                                    <li>
                                        <a href="#">Asistente tienda Liverpool</a>
                                    </li>
                                    <li>
                                        <a href="#">Veterinario Cardif</a>
                                    </li>
                                    <li>
                                        <a href="#">Software Brighton</a>
                                    </li>
                                </ul>
                            </div>
                        </div>                         
                    </div><!--.widget-->
                    <div class="cols2 right">
                        <div class="padding20 bwhite mbttom30 overflow filtro">
                            <div class="left">
                                <label>Ordenar resultados por:</label>
                                <select class="bfecha" name="bfecha">
                                    <option>feccha</option>
                                </select>
                                &nbsp;
                                &nbsp;
                                <select class="bsueldo" name="bsueldo">
                                    <option>sueldo</option>
                                </select>
                                &nbsp;
                                &nbsp;
                                <select class="bpopularidad" name="bpopularidad">
                                    <option>popularidad</option>
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
                                        <span class="flag">CRIMSONWING</span>
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
                                        <span class="flag">CRIMSONWING</span>
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
                                        <span class="flag">CRIMSONWING</span>
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
                                        <span class="flag">CRIMSONWING</span>
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
                                        <span class="flag">CRIMSONWING</span>
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
                                        <span class="flag">CRIMSONWING</span>
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
                                        <span class="flag">CRIMSONWING</span>
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
                                        <span class="flag">CRIMSONWING</span>
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
                                        <span class="flag">CRIMSONWING</span>
                                    </div>
                                </div>
                                <div class="bottom clear padding20">
                                    <p>If you would like to apply for this role or find out more, please apply online or contact Niki Zotou at Robert Walters via email or call +1 212 704 9900 quoting the Reference 157090. Oversee and manage all legal matters for Asset Manager Experience in...Co-ordinate and manage input from technical, credit, finance and commercial departments into ......</p>
                                    <a href="#">exec-appointments.com</a>
                                </div>
                            </li>
                        </ul><!--.jobs-->
                        <a class="load_more" href="#">Load More Jobs</a>
                        <div class="receive_alertas padding20 overflow">
                            <div class="left">
                                <span class="text">Recibe emails de este trabajo Ventas</span>
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