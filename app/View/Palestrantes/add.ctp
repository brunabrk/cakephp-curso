<!--Adicionando um palestrante e as suas palestras-->
<!--Adicionando Palestrante-->

<?php echo $this->Form->create('Palestrante', array('id'=>'PalestranteAddForm','class'=>'form-horizontal well','inputDefaults'=> array('label'=>array('class'=>'control-label'),
		  'div'=>array('class'=>'control-group'))));?>

	<legend>Adicionar Palestrante</legend>
	<?php
		echo $this->Form->input('Palestrante.nome', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>'));
		echo $this->Form->input('Palestrante.descricao', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>','label'=>array('text'=>'Descrição','class'=>'control-label')));
		echo $this->Form->input('Palestrante.url', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>'));		
	?>
	
	<?php echo $this->Form->submit('Enviar', array('class'=>'btn btn-primary','div'=>'form-actions'));?>

<?php echo $this->Form->end();?>