<div class="widget right">
    <form class="column dform padding20 bwhite overflow mbttom30">
        <h3>Busqueda un tema</h3>
        <input class="left" type="text" placeholder="nombre, historia o categoría" />
        <button class="left search">Search</button>
    </form>
    <div class="column mbttom30 bwhite oncity">
        <h4>Foros</h4>
        <ul class="options">
            <li>
                <a href="#" title="Au Pair">
                    <span class="title">AU PAIR</span>
                    <span class="right fontsize11">72 POST</span>
                </a>
            </li>
            <li>
                <a href="#" title="Alojamiento">
                    <span class="title">ALOJAMIENTO</span>
                    <span class="right fontsize11">722 POST</span>
                </a>
            </li>
            <li>
                <a href="#" title="Bancos">
                    <span class="title">BANCOS</span>
                    <span class="right fontsize11">122 POST</span>
                </a>
            </li>
            <li>
                <a href="#" title="Contactos">
                    <span class="title">CONTACTOS</span>
                    <span class="right fontsize11">143 POST</span>
                </a>
            </li>
            <li>
                <a href="#" title="Dudas Legales">
                    <span class="title">DUDAS LEGALES</span>
                    <span class="right fontsize11">120 POST</span>
                </a>
            </li>
            <li>
                <a href="#" title="Estudiar Idiomas">
                    <span class="title">ESTUDIAR IDIOMAS</span>
                    <span class="right fontsize11">720 POST</span>
                </a>
            </li>
            <li>
                <a href="#" title="Fimilia e Hijos">
                    <span class="title">FAMILIA E HIJOS</span>
                    <span class="right fontsize11">740 POST</span>
                </a>
            </li>
            <li>
                <a class="<?php echo isset($_GET['search']) && $_GET['search']=="1" ? "selected" : ""; ?>" href="#" title="Presentaciones">
                    <span class="title">PRESENTACIONES</span>
                    <span class="right fontsize11">127 POST</span>
                </a>
            </li>
            <li>
                <a href="#" title="Sanidad">
                    <span class="title">SANIDAD</span>
                    <span class="right fontsize11">230 POST</span>
                </a>
            </li>
            <li>
                <a href="#" title="Vida Diaria">
                    <span class="title">VIDA DIARIA</span>
                    <span class="right fontsize11">443 POST</span>
                </a>
            </li>
            <li class="last">
                <a href="#" title="Visados y Embajadas">
                    <span class="title">VISADOS Y EMBAJADAS</span>
                    <span class="right fontsize11">433 POST</span>
                </a>
            </li>
        </ul>
    </div>
    <?php if(isset($_GET['related']) && $_GET['related'] == "1"):?>
    <div class="column mbttom30 bwhite oncity">
        <h4>Temas Relacionados</h4>
        <ul class="related">
            <li>
                <a href="#" title="Primera vez entre vosotros!">Primera vez entre vosotros!</a>
            </li>
            <li>
                <a href="#" title="Por aqui me presento">Por aqui me presento</a>
            </li>
            <li>
                <a href="#" title="Hola buenas!">Hola buenas!</a>
            </li>
            <li class="last">
                <a href="#" title="Mi primera entrada en el foro">Mi primera entrada en el foro</a>
            </li>
        </ul>
    </div>
    <?php endif;?>
</div><!--.sidebar_experiences-->