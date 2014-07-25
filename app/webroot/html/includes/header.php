<div id="header" class="clear">
    <div class="access">
        <div class="inner">
            <div class="left">
                <a class=" left aleft" href="#">MY ACCOUNT</a>
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
                <a href="#">
                    <img src="img/logo.png" />
                </a>
            </div>
            <div class="right">
                <ul class="list">
                    <li>
                        <a class="active" href="#">HOME</a>
                    </li>
                    <li>
                        <a href="#">ESCUELAS INGL&Eacute;S</a>
                    </li>
                    <li>
                        <a href="#">ALOJAMIENTO</a>
                    </li>
                    <li>
                        <a href="#">TRABAJO</a>
                    </li>
                    <li>
                        <a class="aright" href="#">OCIO</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php if(isset($_GET) && !empty($_GET["p"])) : ?>
    <div class="breadcrumb">
        <div class="inner">
            <div class="left">
                <h1>Home</h1>
            </div>
            <div class="right">
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
        </div>
    </div>
    <?php endif; ?>
</div>