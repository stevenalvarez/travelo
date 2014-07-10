<div class="usuarios">
<h2><?php  echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['Paise']['nombre_esp'], array('controller' => 'paises', 'action' => 'view', $usuario['Paise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['Ciudade']['nombre_esp'], array('controller' => 'ciudades', 'action' => 'view', $usuario['Ciudade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Urlamigable'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['urlamigable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postal'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechanacimiento'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fechanacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tuenti'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['tuenti']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idioma'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['idioma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimaconexion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ultimaconexion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Validado'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['validado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigovalidacion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['codigovalidacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serializado'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['serializado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen'); ?></dt>
		<dd>
			&nbsp;
            <?php if(!empty($usuario['Usuario']['imagen'])){ ?>
                <img src="<?php echo $this->webroot?>img/usuarios/thumbnails/<?php echo $usuario['Usuario']['imagen'] ?>"/>
            <?php } else{ ?>&nbsp;<?php } ?>
		</dd>
		<dt><?php echo __('Diaregistro'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['diaregistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechahora'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fechahora']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
