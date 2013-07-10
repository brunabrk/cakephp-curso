<?php echo $this->Form->create('Inscricao', array('class'=>'form-horizontal well','inputDefaults'=> array('label'=>array('class'=>'control-label'),
		  'div'=>array('class'=>'control-group'))));
?>
	<legend>Formulário de Inscrição</legend>
	<?php
		echo $this->Form->input('nome', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>'));

		echo $this->Form->input('email', array('class'=>'input-xlarge','between' => '<div class="controls">', 'after' => '</div>'));
		echo $this->Form->input('telefone', array('class'=>'input-xlarge','between' => '<div class="controls">', 'after' => '</div>','type'=>'text'));
		echo $this->Form->input('endereco', array('class'=>'input-xlarge','between' => '<div class="controls">', 'after' => '</div>','label'=>array('text'=>'Endereço','class'=>'control-label')));
		echo $this->Form->submit('Enviar',array('class'=>'btn btn-primary','div'=>'form-actions'));
		
	?>
<?php echo $this->Form->end();?>
