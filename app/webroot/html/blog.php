<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="jhonny" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    	<title>Blog</title>
        
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
                    <div class="cols2 left">
                        <ul class="blogs">
                            <?php for($i=0; $i<=5; $i++):?>
                            <li>
                                <div class="media">
                                    <div class="data">
                                        <img src="img/default_blue.png" />
                                    </div>
                                    <div class="date">
                                        <span class="number">29</span><span class="month">aug</span>
                                    </div>
                                    <div class="category">
                                        <span>Aventura</span>
                                    </div>
                                </div>
                                <div class="description padding20 bwhite">
                                    <h2>Brighton, una semana para recorrerlo</h2>
                                    <div class="text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a neque a tortor tempor in porta sem vulputate. Donec varius felis fermentum nis type specimen book. It has survived not only five centuries.felis fermentum nis type specimen book. It has survived not only five centuries.</p>
                                    </div>
                                    <ul class="hsocial post">
                                        <li>
                                            <a href="#" class="twitter" title="Twitter">Twitter</a>
                                        </li>
                                        <li>
                                            <a href="#" class="facebook selected" title="Facebook">Facebook</a>
                                        </li>
                                        <li>
                                            <a href="#" class="google_more" title="Google +">Google +</a>
                                        </li>
                                        <li class="last">
                                            <a href="#" class="pinterest" title="Pinterest">Pinterest</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bsocial padding10 bwhite overflow">
                                    <div class="reviews">
                                        <div class="left posted">
                                            <div class="left">
                                                <img src="img/default_user.jpg" />
                                            </div>
                                            <h3 class="left">
                                                <span class="name">jessica brown</span>
                                            </h3>
                                        </div>
                                        <ul class="right">
                                            <li>
                                                <a class="comments" href="#"> 30 comments</a>
                                            </li>
                                            <li>
                                                <a class="likes selected" href="#"> 22 likes</a>
                                            </li>
                                            <li class="last">
                                                <a class="tags" href="#">cambio destino,uk</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <?php endfor;?>
                        </ul>
                        <a class="load_more" href="#">Load More Posts</a>                    
                    </div><!--.cols2-->
                    <?php include("includes/sidebar_blog.php"); ?>
                </div><!--.inner-->
    		</div><!--#content-->
            <?php include("includes/footer.php"); ?>
    	</div>
    </body>
</html>