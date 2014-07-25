<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="jhonny" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    	<title>Travelo</title>
        
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <!-- include slider.css -->
        <link rel="stylesheet" href="css/owl.carousel.css"/>
        <link rel="stylesheet" href="css/owl.theme.css"/>
        <link rel="stylesheet" href="css/jquery.magnific-popup.css"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/jquery.customSelect.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.flash.min_.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        
    </head>
    <body>
    	<div id="container">
    		<?php include("includes/header.php"); ?>
    		<div id="content">
                <div class="navigation">
                    <div class="wrap">
                        <ul>
                            <li>
                                <a class="selected" href="#">DESTINO</a>
                            </li>
                            <li>
                                <a href="#">ESCUELAS</a>
                            </li>
                            <li>
                                <a href="#">ALOJAMIENTO</a>
                            </li>
                            <li>
                                <a href="#">TRABAJO</a>
                            </li>
                            <li>
                                <a href="#">OCIO</a>
                            </li>
                        </ul>
                    </div>
                </div><!--.navigation-->
                <div class="search_destination">
                    <div class="wrap">
                        <form class="info">
                            <h2>Tu Destino</h2>
                            <ul>
                                <li>
                                    <label>PAIS</label>
                                    <select class="pais" name="pais">
                                        <option>Inglaterra</option>
                                        <option>Bolivia</option>
                                    </select>
                                </li>
                                <li>
                                    <label>CIUDAD</label>
                                    <select class="ciudad" name="ciudad">
                                        <option>Brighton</option>
                                        <option>Sucre</option>
                                    </select>
                                </li>
                                <li>
                                    <label>&nbsp;</label>
                                    <button>ENCUENTRA TU SITIO</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div><!--.search_destination-->
                <div class="how_it_works">
                    <div class="wrap">
                        <h3>C&oacute;mo funciona <span>Expats?</span></h3>
                        <ul>
                            <li class="row">
                                <div class="top">
                                    <h4 class="right">Encuentra tu Destino</h4>
                                    <p class="alignright">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="bottom">
                                    <h4 class="right">Listo para tu nueva vida!</h4>
                                    <p class="alignright">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </li>
                            <li class="center">
                                <img src="img/cicle_travel.png" />
                            </li>
                            <li class="row">
                                <div class="top">
                                    <h4 class="left">Prepara tu sue&ntilde;o</h4>
                                    <p class="alignleft">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="bottom">
                                    <h4 class="left">Hacemos los tr&aacute;mites por ti</h4>
                                    <p class="alignleft">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--.how_it_works-->
                <div class="videos">
                    <div class="inner">
                        <h3>Videos de destinos populares</h3>
                        <ul id="owl-carousel-videos">
                            <li>
                                <div class="box">
                                    <a class="ajax_popup" href="popup_video.php">
                                        <img src="img/video1.jpg" />
                                        <img class="hover" src="img/vhover.png" />
                                    </a>
                                </div>
                                <div class="items">
                                    <div class="item line">
                                        <h5 class="left">Brighton</h5>
                                        <span class="right country">England</span>
                                    </div>
                                    <div class="item line">
                                        <div class="left">
                                            <span class="star selected">1</span>
                                            <span class="star selected">2</span>
                                            <span class="star selected">3</span>
                                            <span class="star selected">4</span>
                                            <span class="star">5</span>
                                        </div>
                                        <div class="right">
                                            <span class="reviews">270 REVIEWS</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    </div>
                                    <div class="item">
                                        <a class="bselect left btn green" href="#">SELECCIONA</a>
                                        <a class="bmap right btn orange" href="#">VER EN MAPA</a>
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
                                    <div class="item line">
                                        <h5 class="left">London</h5>
                                        <span class="right country">England</span>
                                    </div>
                                    <div class="item line">
                                        <div class="left">
                                            <span class="star selected">1</span>
                                            <span class="star selected">2</span>
                                            <span class="star selected">3</span>
                                            <span class="star selected">4</span>
                                            <span class="star">5</span>
                                        </div>
                                        <div class="right">
                                            <span class="reviews">270 REVIEWS</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    </div>
                                    <div class="item">
                                        <a class="bselect left btn green" href="#">SELECCIONA</a>
                                        <a class="bmap right btn orange" href="#">VER EN MAPA</a>
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
                                    <div class="item line">
                                        <h5 class="left">Paris</h5>
                                        <span class="right country">France</span>
                                    </div>
                                    <div class="item line">
                                        <div class="left">
                                            <span class="star selected">1</span>
                                            <span class="star selected">2</span>
                                            <span class="star selected">3</span>
                                            <span class="star selected">4</span>
                                            <span class="star">5</span>
                                        </div>
                                        <div class="right">
                                            <span class="reviews">270 REVIEWS</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    </div>
                                    <div class="item">
                                        <a class="bselect left btn green" href="#">SELECCIONA</a>
                                        <a class="bmap right btn orange" href="#">VER EN MAPA</a>
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
                                    <div class="item line">
                                        <h5 class="left">Malta</h5>
                                        <span class="right country">Malta</span>
                                    </div>
                                    <div class="item line">
                                        <div class="left">
                                            <span class="star selected">1</span>
                                            <span class="star selected">2</span>
                                            <span class="star selected">3</span>
                                            <span class="star selected">4</span>
                                            <span class="star">5</span>
                                        </div>
                                        <div class="right">
                                            <span class="reviews">270 REVIEWS</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    </div>
                                    <div class="item">
                                        <a class="bselect left btn green" href="#">SELECCIONA</a>
                                        <a class="bmap right btn orange" href="#">VER EN MAPA</a>
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
                                    <div class="item line">
                                        <h5 class="left">Madrid</h5>
                                        <span class="right country">Espa&ntilde;a</span>
                                    </div>
                                    <div class="item line">
                                        <div class="left">
                                            <span class="star selected">1</span>
                                            <span class="star selected">2</span>
                                            <span class="star selected">3</span>
                                            <span class="star selected">4</span>
                                            <span class="star">5</span>
                                        </div>
                                        <div class="right">
                                            <span class="reviews">270 REVIEWS</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    </div>
                                    <div class="item">
                                        <a class="bselect left btn green" href="#">SELECCIONA</a>
                                        <a class="bmap right btn orange" href="#">VER EN MAPA</a>
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
                                    <div class="item line">
                                        <h5 class="left">Barcelona</h5>
                                        <span class="right country">Espa&ntilde;a</span>
                                    </div>
                                    <div class="item line">
                                        <div class="left">
                                            <span class="star selected">1</span>
                                            <span class="star selected">2</span>
                                            <span class="star selected">3</span>
                                            <span class="star selected">4</span>
                                            <span class="star">5</span>
                                        </div>
                                        <div class="right">
                                            <span class="reviews">270 REVIEWS</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                    </div>
                                    <div class="item">
                                        <a class="bselect left btn green" href="#">SELECCIONA</a>
                                        <a class="bmap right btn orange" href="#">VER EN MAPA</a>
                                    </div>
                                </div>
                            </li>                                                        
                        </ul>
                    </div>
                </div><!--.videos--->
                <div class="we_dedicated  bgray tppadding20 clear">
                    <div class="inner">
                        <div class="box left">
                            <ul class="imagen">
                                <li>
                                    <img src="img/default_blank.jpg" />
                                </li>
                                <li>
                                    <img src="img/default_blank.jpg" />
                                </li>
                                <li>
                                    <img src="img/default_blank.jpg" />
                                </li>
                                <li>
                                    <img src="img/default_blank.jpg" />
                                </li>
                                <li>
                                    <img src="img/default_blank.jpg" />
                                </li>
                                <li>
                                    <img src="img/default_blank.jpg" />
                                </li>
                                <li>
                                    <img src="img/default_blank.jpg" />
                                </li>
                                <li>
                                    <img src="img/default_blank.jpg" />
                                </li>
                                <li>
                                    <img src="img/default_blank.jpg" />
                                </li>
                            </ul>
                        </div>
                        <div class="right description">
                            <h2>Expats is a web pque helps you choose your destination, accommodation, schools, etc. .. to start your life in another country</h2>
                            <p>Bringing you a modern, comfortable, and connected travel experience is one of our highest priorities and that�s why we continuously try to improve your experience when you book anything with us.</p>
                            <p>We really appreciate and welcome any of suggstions you might have for us, so feel free drop us line anytime.</p>
                        </div>
                    </div>
                </div>                
                <div class="timeline bgray tppadding20 overflow">
                    <div class="inner">
                        <div class="left cols">
                            <div class="width90p">
                                <h4>&Uacute;ltimos hallazgos</h4>
                                <ul class="options clear overflow">
                                    <li class="selected">
                                        <a href="javascript:void(0)" lang="popular">POPULAR</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" lang="brighton">BRIGHTON</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" lang="malta">MALTA</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" lang="london">LONDON, UK</a>
                                    </li>
                                    <li class="last">
                                        <a href="javascript:void(0)" lang="paris">PARIS</a>
                                    </li>
                                </ul>
                                <div class="list">
                                    <ul class="item selected" id="popular">
                                        <li>
                                            <div class="left box">
                                                <div class="ibox">
                                                    <img src="img/img1.jpg" />
                                                </div>
                                                <span class="percent">
                                                    <span>SAVE</span>
                                                    <span class="number">23 %</span>
                                                </span>
                                            </div>
                                            <div class="right detail">
                                                <div class="left info">
                                                    <h5>Hostal Los Vascos</h5>
                                                    <span>Malta, Malta</span>
                                                    <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                </div>
                                                <div class="right price">
                                                    <span>Noche</span>
                                                    <span class="euro">15 &euro;</span>
                                                    <a class="bselect right btn green" href="#">SELECT</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="last">
                                            <div class="left box">
                                                <div class="ibox">
                                                    <img src="img/img1.jpg" />
                                                </div>
                                                <span class="percent">
                                                    <span>SAVE</span>
                                                    <span class="number">23 %</span>
                                                </span>
                                            </div>
                                            <div class="right detail">
                                                <div class="left info">
                                                    <h5>Pensi&oacute;n Paquita</h5>
                                                    <span>BRIGHTON, UK</span>
                                                    <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                                </div>
                                                <div class="right price">
                                                    <span>Noche</span>
                                                    <span class="euro">15 &euro;</span>
                                                    <a class="bselect right btn green" href="#">SELECT</a>
                                                </div>
                                            </div>
                                        </li>                            
                                    </ul><!--.item-->
                                    <ul class="item" id="brighton"></ul>
                                    <ul class="item" id="malta"></ul>
                                    <ul class="item" id="london"></ul>
                                    <ul class="item" id="paris"></ul>
                                </div>
                            </div>
                        </div><!--.cols-->
                        <div class="right cols">
                            <h4>Que dicen de nosotros?</h4>
                            <ul id="owl-carousel-comments" class="comments">
                                <li>
                                    <p>Este chico esta dise�ando una web increible que va a triunfar por todo el mundo, no puedo esperar para entrar a verla ! Con un dise�o cuidado y una programaci�n bien trabajada va a hacer la competencia al mismisimo Trip Advisor! xxxx</p>
                                    <div class="detail_guest">
                                        <div class="left box">
                                            <img src="img/guest1.jpg" />
                                        </div>
                                        <div class="left name">
                                            <h6>Yasmin Fernandez</h6>
                                            <span>GUEST</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Este chico esta dise�ando una web increible que va a triunfar por todo el mundo, no puedo esperar para entrar a verla ! Con un dise�o cuidado y una programaci�n bien trabajada va a hacer la competencia al mismisimo Trip Advisor! xxxx</p>
                                    <div class="detail_guest">
                                        <div class="left box">
                                            <img src="img/guest1.jpg" />
                                        </div>
                                        <div class="left name">
                                            <h6>Yasmin Fernandez</h6>
                                            <span>GUEST</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Este chico esta dise�ando una web increible que va a triunfar por todo el mundo, no puedo esperar para entrar a verla ! Con un dise�o cuidado y una programaci�n bien trabajada va a hacer la competencia al mismisimo Trip Advisor! xxxx</p>
                                    <div class="detail_guest">
                                        <div class="left box">
                                            <img src="img/guest1.jpg" />
                                        </div>
                                        <div class="left name">
                                            <h6>Yasmin Fernandez</h6>
                                            <span>GUEST</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Este chico esta dise�ando una web increible que va a triunfar por todo el mundo, no puedo esperar para entrar a verla ! Con un dise�o cuidado y una programaci�n bien trabajada va a hacer la competencia al mismisimo Trip Advisor! xxxx</p>
                                    <div class="detail_guest">
                                        <div class="left box">
                                            <img src="img/guest1.jpg" />
                                        </div>
                                        <div class="left name">
                                            <h6>Yasmin Fernandez</h6>
                                            <span>GUEST</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Este chico esta dise�ando una web increible que va a triunfar por todo el mundo, no puedo esperar para entrar a verla ! Con un dise�o cuidado y una programaci�n bien trabajada va a hacer la competencia al mismisimo Trip Advisor! xxxx</p>
                                    <div class="detail_guest">
                                        <div class="left box">
                                            <img src="img/guest1.jpg" />
                                        </div>
                                        <div class="left name">
                                            <h6>Yasmin Fernandez</h6>
                                            <span>GUEST</span>
                                        </div>
                                    </div>
                                </li>                                                                                                                                
                            </ul>
                        </div><!--.cols-->
                    </div>
                </div>
    		</div><!--#content-->
            <?php include("includes/footer.php"); ?>
    	</div>
    </body>
</html>