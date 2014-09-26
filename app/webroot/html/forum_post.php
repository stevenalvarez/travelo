<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="jhonny" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    	<title>Forum Post</title>
        
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
    		<div id="content" class="page forum">
                <div class="inner overflow">
                    <div class="cols2 left">
                        <h2>Eres nuevo en la Comunidad? Puedes darte a conocer en este foro :) </h2>
                        <a class="npost popup" href="#new_post">escribe un nuevo post</a>
                        <table class="posts">
                            <thead>
                                <tr>
                                    <td class="topic">
                                        <span>Topic</span>
                                    </td>
                                    <td class="replies">
                                        <span>Replies</span>
                                    </td>
                                    <td class="created">
                                        <span>Created</span>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= 5; $i++) :?>
                                <tr class="odd">
                                    <td>
                                        <a class="title" href="#">Hola Buenas!</a>
                                    </td>
                                    <td>
                                        <span class="center">4</span>
                                    </td>
                                    <td>hace 13 horas by: <b>Gidi</b></td>
                                </tr>
                                <tr class="pair">
                                    <td>
                                        <a class="title" href="#">Tengo un 20.000 € ahorrados y quiero invertir fuera de España, que me aconsejais?</a>
                                    </td>
                                    <td>
                                        <span class="center">6</span>
                                    </td>
                                    <td>hace 6 dias by: <b>Marcos del Rey</b></td>
                                </tr>
                                <tr class="odd">
                                    <td>
                                        <a class="title" href="#">Alguna Comunidad española en Singapur?</a>
                                    </td>
                                    <td>
                                        <span class="center">12</span>
                                    </td>
                                    <td>hace 7 dias by: <b>David Vales</b></td>
                                </tr>
                                <tr class="pair">
                                    <td>
                                        <a class="title" href="#">Boston, Lincolnshire</a>
                                    </td>
                                    <td>
                                        <span class="center">4</span>
                                    </td>
                                    <td>hace 7 dias by: <b>Gidi</b></td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                        <div class="paging">
                            <span class="prev">
                                <a href="#">previous</a>
                            </span>
                            <span class="current">1</span>
                            <span><a href="#">2</a></span>
                            <span><a href="#">3</a></span>
                            <span><a href="#">4</a></span>
                            <span><a href="#">5</a></span>
                            <span><a href="#">6</a></span>
                            <span><a href="#">7</a></span>
                            <span><a href="#">8</a></span>
                            <span><a href="#">9</a></span>
                            <span class="next">
                                <a href="#">next</a>
                            </span>
                        </div>
                    </div><!--.cols2-->
                    <?php include("includes/sidebar_forum.php"); ?>
                </div><!--.inner-->
                <div class="write_your_story">
                    <ul>
                        <li class="left">
                            <div class="box">
                                <img src="img/person.png" />
                            </div>
                        </li>
                        <li class="left">
                            <div class="text">
                                <span>Tienes alguna duda, consejo?</span>
                                <span class="have">No lo dudes y COMPARTELO con NOSOTROS!</span>
                            </div>
                        </li>
                    </ul>
                </div>
    		</div><!--#content-->
            <?php include("popup_new_post.php"); ?>
            <?php include("includes/footer.php"); ?>
    	</div>
    </body>
</html>