<!--Adicionando Palestras-->

<?php echo $this->Form->create('Palestra', array('class'=>'form-horizontal well','inputDefaults'=> array('label'=>array('class'=>'control-label'),
		  'div'=>array('class'=>'control-group'))));?>
	<legend>Adicionar Palestra</legend>
	<?php 
		echo $this->Form->input('Palestra.nome', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>'));
		echo $this->Form->input('Palestra.palestrante_id', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>'));
		echo $this->Form->input('Palestra.inicio', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>','type' => 'time','timeFormat'=>'24'));
		echo $this->Form->input('Palestra.fim', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>','type' => 'time','timeFormat'=>'24'));
		echo $this->Form->input('Palestra.descricao', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>','label'=>array('text'=>'Descrição','class'=>'control-label')));
		echo $this->Form->submit('Enviar', array('class'=>'btn btn-primary','div'=>'form-actions'));
	?>

<?php echo $this->Form->end();?>

