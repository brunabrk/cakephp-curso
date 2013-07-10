<div class="row">
	<div class="span6">
		<div class="well">
			<h1 class="sombra">Dados do Palestrante</h1>
			<h3 class="sombra">Nome: <?php echo $palestrante['Palestrante']['nome'];?></h3>
			<h3 class="sombra">Descrição: <?php echo $palestrante['Palestrante']['descricao'];?></h3>
			<h3 class="sombra">URL: 
				<?php 
					$url = $palestrante['Palestrante']['endereco_site'];

					if(!$url){
						echo 'Não há site cadastrado!';
					}

				?><a href="<?php echo $url?>"><?php echo $url?></a></h3>
		</div>
	</div>
</div>