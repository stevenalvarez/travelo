<div class="usuarios">
	<h2><?php echo __('Usuarios'); ?></h2>
    <?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'),array('class'=>'btn btn-success','style' => 'float:right;')); ?>
    <br /><br />
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover table_list">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pais_id'); ?></th>
            <th><?php echo $this->Paginator->sort('ciudad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('validado'); ?></th>
			<th><?php echo $this->Paginator->sort('imagen'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $key => $usuario): ?>
	<tr>
        <td><?php echo $key+1; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usuario['Paise']['nombre_esp'], array('controller' => 'paises', 'action' => 'view', $usuario['Paise']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usuario['Ciudade']['nombre_esp'], array('controller' => 'ciudades', 'action' => 'view', $usuario['Ciudade']['id'])); ?>
		</td>
		<td><?php echo h($usuario['Usuario']['title']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['tipo']); ?>&nbsp;</td>
        <td style="text-align: center;">
            <?php echo $usuario['Usuario']['validado'] != "" ? "SI":"NO"; ?>&nbsp;
        </td>
		<td style="text-align: center;">
            <?php if(!empty($usuario['Usuario']['imagen'])){ ?>
                <img src="<?php echo $this->webroot?>img/usuarios/thumbnails/<?php echo $usuario['Usuario']['imagen'] ?>"/>
            <?php } else{ ?>&nbsp;<?php } ?>
        </td>
		<td>
            <?php if($usuario['Usuario']['id'] != "1"): ?>
            <?php if($usuario['Usuario']['tipo'] != "admin" || $_SESSION['Auth']['User']['email'] == "jhonny" && $_SESSION['Auth']['User']['tipo'] == "admin"): ?>
			<?php echo $this->Html->link('<i class="icon-search icon-white"></i> Ver', array('action' => 'view', $usuario['Usuario']['id']),array('class'=>'btn btn-info','escape'=>false)); ?>
            <?php echo $this->Html->link('<i class="icon-edit"></i> Editar', array('action' => 'edit', $usuario['Usuario']['id']),array('class'=>'btn btn','escape'=>false)); ?>
			<?php echo $this->Form->postLink('<i class="icon-search icon-remove"></i> Eliminar', array('action' => 'delete', $usuario['Usuario']['id']), array('class'=>'btn btn-danger','escape'=>false), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
            <?php endif;?>
            <?php endif;?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>