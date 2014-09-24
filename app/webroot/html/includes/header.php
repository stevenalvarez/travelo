<div id="header" class="clear">
    <div class="access">
        <div class="inner">
            <div class="left">
                <a class=" left aleft" href="profile.php?p=1">MI CUENTA</a>
                <form class="form_lenguage left">
                    <select class="language" name="language">
                        <option value="esp" selected="selected">ESPA&Nacute;OL</option>
                        <option value="eng">ENGLISH</option>
                    </select>
                </form>
            </div>
            <div class="right">
                <a href="#">LOGIN</a>
                <a class="aright" href="#">SINGUP</a>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="inner">
            <div class="left">
                <a class="logo" href="#">
                    <img src="img/logo.png" />
                </a>
            </div>
            <div class="right">
                <ul class="list left">
                    <li>
                        <a class="active" href="home.php">HOME</a>
                    </li>
                    <li>
                        <a href="jobs.php?p=1">TRABAJO</a>
                    </li>
                    <li>
                        <a href="acomodation.php?p=1">ALOJAMIENTO</a>
                    </li>
                    <li>
                        <a href="schools_languages.php?p=1">ESCUELAS IDIOMAS</a>
                    </li>
                    <li>
                        <a href="forum_main.php?p=1">FORO</a>
                    </li>
                    <li>
                        <a href="blog.php?p=1">BLOG</a>
                    </li>
                </ul>
                <ul class="right hsocial">
                    <li>
                        <a href="#" class="twitter" title="Twitter">Twitter</a>
                    </li>
                    <li>
                        <a href="#" class="facebook selected" title="Facebook">Facebook</a>
                    </li>
                    <li>
                        <a href="#" class="linkedin" title="Linkedin">Linkedin</a>
                    </li>
                    <li class="last">
                        <a href="#" class="vimeo" title="Vimeo">Vimeo</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php if(isset($_GET) && !empty($_GET["p"])) : ?>
    <div class="breadcrumb">
        <div class="inner">
            <div class="left">
                <h1>
                    <span class="title left">Home</span>
                    <span class="arrow left">&nbsp;</span>
                </h1>
            </div>
            <!--
            <div class="right" style="padding: 15px 0;">
                <ul>
                    <li>
                        <a href="#">HOME</a> /
                    </li>
                    <li>
                        <a href="#">PAGES</a> /
                    </li>
                    <li>
                        <a class="current" href="#">BLOG RIGTH SIDEBAR</a>
                    </li>
                </ul>
            </div>
            -->
        </div>
    </div>
    <?php endif; ?>
</div>