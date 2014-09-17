<div style="display: none;">
    <div id="new_post" class="popup-content new_post">
        <h3 class="title">Crea un nuevo tema del foro</h3>
        <br />
        <form class="new_post">
            <label>Titulo del Tema: <span class="required">*</span></label>
            <input type="text" placeholder="Escribe el título" />
            <label>Mensaje: <span class="required">*</span></label>
            <textarea placeholder="Escribe aqui tu mensaje..." rows="10"></textarea>
            <div class="options overflow">
                <div class="left selector">
                    <label>Foro: <span class="required">*</span></label>
                    <select name="foro">
                        <option>Alojamiento</option>
                        <option>Contactos</option>
                    </select>
                </div>
                <div class="left selector">
                    <label>Pais: <span class="required">*</span> &nbsp;&nbsp;&nbsp;&nbsp; <span class="optional">Relativo a tu consulta</span></label>
                    <select name="pais">
                        <option>Inglaterra</option>
                        <option>Bolivia</option>
                    </select>
                </div>
                <div class="left selector last">
                    <label>&nbsp;</label>
                    <input type="submit" class="btn green" value="Crear" />
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("form.new_post").find("select").customSelect();
    });
</script>