<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="jhonny" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    	<title>Profile</title>
        
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <!-- include slider.css -->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.magnific-popup.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.custom.file.upload.css"/>
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
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
                <div class="inner overflow">
                    <div class="perfil options left">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" lang="principal" title="Principal">
                                    <span class="item principal">Principal</span>
                                </a>
                            </li>
                            <li class="selected">
                                <a href="javascript:void(0)" lang="perfil" title="Mi Perfil">
                                    <span class="item perfil">Mi Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" lang="favoritos" title="Favoritos">
                                    <span class="item favoritos">Favoritos</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" lang="travel_stories" title="Travel Stories Video & Photo">
                                    <span class="item travel_stories">Travel Stories <br /> Video & Photo</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" lang="configuracion" title="Configuraci&oacute;n">
                                    <span class="item configuracion">Configuraci&oacute;n</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="perfil contact padding20 bwhite left">
                        <div id="principal" style="display: none;">
                        </div>
                        <div id="perfil">
                            <form>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h3>Detalles Personales</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>NOMBRE</label>
                                                <input class="pair" type="text" />
                                            </td>
                                            <td>
                                                <label>APELLIDO</label>
                                                <input class="odd" type="text" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>EMAIL</label>
                                                <input class="pair" type="text" />
                                            </td>
                                            <td>
                                                <label>FECHA DE NACIMIENTO</label>
                                                <div class="selector">
                                                    <select class="day" name="day">
                                                        <?php for($i=1; $i<=31; $i++):?>
                                                            <option value="<?php echo $i<10 ? "0".$i : $i; ?>"><?php echo $i; ?></option>
                                                        <?php endfor;?>
                                                    </select>
                                                </div>
                                                <div class="selector">
                                                    <?php $months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")?>
                                                    <select class="month" name="month">
                                                        <?php foreach($months as $key => $month):?>
                                                            <option value="<?php echo ($key+1)<10 ? "0".($key+1) : ($key+1); ?>"><?php echo $month; ?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                                <div class="selector">
                                                    <select class="year" name="year">
                                                        <?php for($i=1920; $i<=(date("Y")- 10); $i++):?>
                                                            <option value="<?php echo $i ?>"><?php echo $i; ?></option>
                                                        <?php endfor;?>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>PAIS</label>
                                                <select class="pais" name="pais">
                                                    <option>Inglaterra</option>
                                                    <option>Bolivia</option>
                                                </select>
                                            </td>
                                            <td>
                                                <label>CIUDAD</label>
                                                <select class="ciudad" name="ciudad">
                                                    <option>Brighton</option>
                                                    <option>Sucre</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <table>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h3>Donde vives?</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>PAIS RESIDENCIA</label>
                                                <select class="pais" name="pais">
                                                    <option>Inglaterra</option>
                                                    <option>Bolivia</option>
                                                </select>
                                            </td>
                                            <td>
                                                <label>CIUDAD</label>
                                                <select class="ciudad" name="ciudad">
                                                    <option>Brighton</option>
                                                    <option>Sucre</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <table>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h3>Subir tu fotograf&iacute;a</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-file-upload">
                                                     <!--<label for="file">File: </label>--> 
                                                    <input type="file" id="file" name="foto" />
                                                </div>
                                                <br />
                                                <br />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <table class="last">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h3>Tu descripci&oacute;n</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea placeholder="Comentanos algo sobre t&iacute;"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input class="btn green" type="submit" value="ACTUALIZAR PERFIL" style="width: 30%;"/>
                            </form>
                        </div>
                        <div id="favoritos" style="display: none;">
                        </div>
                        <div id="travel_stories" style="display: none;">
                        </div>
                        <div id="configuracion" style="display: none;">
                        </div>
                    </div>
                </div><!--.inner-->
    		</div><!--#content-->
            <?php include("includes/footer.php"); ?>
    	</div>
    </body>
</html>