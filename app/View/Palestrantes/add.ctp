<!--Adicionando um palestrante e as suas palestras-->
<!--Adicionando Palestrante-->

<?php echo $this->Form->create('Palestrante', array('id'=>'PalestranteAddForm','class'=>'form-horizontal well','inputDefaults'=> array('label'=>array('class'=>'control-label'),
		  'div'=>array('class'=>'control-group'))));?>

	<legend>Adicionar Palestrante</legend>
	<?php
		echo $this->Form->input('Palestrante.nome', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>'));
		echo $this->Form->input('Palestrante.descricao', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>'));
		echo $this->Form->input('Palestrante.url', array('class'=> 'input-xlarge','between' => '<div class="controls">', 'after' => '</div>'));		
	?>
	

	<!--Adicionando Palestras na table-->

	<legend>Adicionar Palestras</legend>

	<div class="control-group">

		<label class="control-label" for="palestras">Palestra</label>

		<div class="controls">

			<select id="add-palestras">

				<!---Criando um select e options de acordo com o id e nome da palestra-->
				<?php foreach ($palestras as $palestra):?>
					<option value="<?php echo $palestra['Palestra']['id']?>"><?php echo $palestra['Palestra']['nome']?></option>
				<?php endforeach;?>				

			</select>
		</div>	
	</div>

	<div class="control-group">
		<label class="control-label">Descrição Palestra</label>
		<div class="controls">
			<textarea id="add-descricao"></textarea>
		</div>
	</div>
			
	<div class="control-group">

		<div class="controls">
			<button type="button" class="btn btn-inverse btn-small" onclick="addName()">Add</button>
		</div>

	</div>

	<table id='table-add-palestra' class="table table-bordered table-striped table-hover">

	    <thead>
	      <tr>
	        <th>Nome</th>
	        <th>Descrição</th>
	      </tr>
	    </thead>

	    <!-- Será adicionado dinamicamente -->
	    <tbody>
	      
	    </tbody>
	</table>
			
	<?php echo $this->Form->submit('Enviar', array('class'=>'btn btn-primary','div'=>'form-actions'));?>

<?php echo $this->Form->end();?>

<script type="text/javascript">

//Pega os dados da tabela
$('#PalestranteAddForm').submit(function(){
		var tbl = $('#table-add-palestra tr:has(td)').map(function(i, v) {
		    var $td =  $('td', this);
		    $td.eq(0).append('<input name="data[Palestra]['+i+'][nome]" type="hidden" value="'+$td.eq(0).text()+'"/>');    
			$td.eq(1).append('<input name="data[Palestra]['+i+'][descricao]" type="hidden" value="'+$td.eq(1).text()+'"/>');	    
		}).get();
 		
});
</script>