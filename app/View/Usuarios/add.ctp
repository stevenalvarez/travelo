<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('pais_id');
		echo $this->Form->input('ciudad_id');
		echo $this->Form->input('urlamigable');
		echo $this->Form->input('title');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('tipo');
		echo $this->Form->input('genero');
		echo $this->Form->input('direccion');
		echo $this->Form->input('postal');
		echo $this->Form->input('fechanacimiento');
		echo $this->Form->input('telefono');
		echo $this->Form->input('twitter');
		echo $this->Form->input('facebook');
		echo $this->Form->input('tuenti');
		echo $this->Form->input('web');
		echo $this->Form->input('idioma');
		echo $this->Form->input('ultimaconexion');
		echo $this->Form->input('validado');
		echo $this->Form->input('codigovalidacion');
		echo $this->Form->input('serializado');
		echo $this->Form->input('imagen');
		echo $this->Form->input('diaregistro');
		echo $this->Form->input('fechahora');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Paises'), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paise'), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
