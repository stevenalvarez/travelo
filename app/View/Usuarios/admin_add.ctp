<div class="usuarios">
<?php echo $this->Form->create('Usuario', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('A&ntilde;adir Usuario'); ?></legend>
	<?php
		echo $this->Form->input('pais_id', array('default' => "28"));
		echo $this->Form->input('ciudad_id', array('default' => "650"));
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
        echo $this->Form->input('tipo', array('options' => array('usuario' => 'Usuario', 'admin' => 'Administrador'), 'default' => "usuario"));
        echo $this->Form->input('genero', array('options' => array('M' => 'Masculino', 'F' => 'Femenino'), 'default' => "M"));
		echo $this->Form->input('direccion');
		echo $this->Form->input('postal');
        echo $this->Form->input('fechanacimiento', array('label' => 'Fecha de Nacimiento','dateFormat' => 'DMY','minYear' => date('Y') - 70,'maxYear' => date('Y') - 18));
		echo $this->Form->input('telefono');
		echo $this->Form->input('twitter');
		echo $this->Form->input('facebook');
		echo $this->Form->input('tuenti');
		echo $this->Form->input('web');
		echo $this->Form->input('ultimaconexion', array("div"=>array("style" => "display:none")));
        echo $this->Form->input('validado', array('label'=>'Validado', 'options' => array('0' => 'No Validado', '1' => 'Validado'), 'default' => "1"));
        echo $this->Form->input('imagen',array('label' => "Imagen", 'required'=> "required", 'type'=>'file'));
		echo $this->Form->input('diaregistro', array("div"=>array("style" => "display:none")));
		echo $this->Form->input('fechahora', array("div"=>array("style" => "display:none")));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>