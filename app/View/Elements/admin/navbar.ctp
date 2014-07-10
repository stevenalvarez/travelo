<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container" style="width: 980px;">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            
            <!-- Be sure to leave the brand out there if you want it shown -->
            <!--
            <a class="brand" href="<?php echo $this->webroot?>" style="padding: 10px 20px 5px 0px; margin: 0;">
                <img style="width: 50px;" src="<?php echo $this->webroot."img/logo_admin.png"; ?>" />
            </a>
            -->
            
            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse navbar-responsive-collapse">
                <ul class="nav" style="margin-right: 0px;">
                    <li  class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="icon-wrench"></i> Herramientas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">Usuarios</li>
                            <li><a href="<?php echo $this->webroot?>admin/usuarios/index/admin"><i class="icon-list"></i> Lista Administradores</a></li>
                            <li><a href="<?php echo $this->webroot?>admin/usuarios/index/usuario"><i class="icon-list"></i> Lista Usuarios</a></li>
                        </ul>
                    </li><!--Herramientas-->
                </ul>
                <ul class="nav pull-right">
                    <li>
                        <a href="<?php echo $this->webroot?>usuarios/logout"><i class="icon-off"></i> Salir</a>
                    </li>
                </ul>
            </div>
        
        </div>
    </div>
</div>