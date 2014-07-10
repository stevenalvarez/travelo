<div class="usuarios">
<?php echo $this->Form->create('Usuario', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pais_id');
		echo $this->Form->input('ciudad_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
        echo $this->Form->input('tipo', array('options' => array('usuario' => 'Usuario', 'admin' => 'Administrador')));
        echo $this->Form->input('genero', array('options' => array('M' => 'Masculino', 'F' => 'Femenino')));
		echo $this->Form->input('direccion');
		echo $this->Form->input('postal');
        echo $this->Form->input('fechanacimiento', array('label' => 'Fecha de Nacimiento','dateFormat' => 'DMY','minYear' => date('Y') - 70,'maxYear' => date('Y') - 18));
		echo $this->Form->input('telefono');
		echo $this->Form->input('twitter');
		echo $this->Form->input('facebook');
		echo $this->Form->input('tuenti');
		echo $this->Form->input('web');
		echo $this->Form->input('ultimaconexion', array("div"=>array("style" => "display:none")));
        echo $this->Form->input('validado', array('label'=>'Validado', 'options' => array('0' => 'No Validado', '1' => 'Validado')));
        echo $this->Form->input('imagen',array('label' => "Imagen", 'type'=>'file'));
        echo $this->Form->hidden("imagen_old", array('id' => 'FotoImageOld', 'name' => 'data[Usuario][imagen_old]', 'value' => isset($this->request->data["Usuario"]["imagen"])? $this->request->data["Usuario"]["imagen"] : ""));
	?>
        <img src="<?php echo $this->webroot?>img/usuarios/thumbnails/<?php echo $this->request->data["Usuario"]["imagen"]; ?>"/>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
