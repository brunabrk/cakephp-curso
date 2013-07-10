<!--Adicionando Palestras-->

<?php echo $this->Form->create('Palestra', array('class'=>'form-horizontal well','inputDefaults'=> array('label'=>array('class'=>'control-label'),
		  'div'=>array('class'=>'control-group'))));?>
	<legend>Adicionar Palestra</legend>
	<?php 
		echo $this->Form->input('Palestra.nome');
		echo $this->Form->input('Palestra.inicio');
		echo $this->Form->input('Palestra.fim');
		echo $this->Form->input('Palestra.descricao');
		echo $this->Form->submit('Enviar');
	?>

<?php echo $this->Form->end();?>

