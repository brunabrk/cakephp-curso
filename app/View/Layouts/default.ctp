<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="	width=device-width, initial-scale=1.0">
	<meta name="description" content="Cakephp Curso">

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('global','bootstrap.min','bootstrap-responsive.min','font-awesome.min','bootswatch','style'));

		echo $this->Html->script(array('jquery-1.9.1','jquery.smooth-scroll.min','bootstrap.min','bootswatch.js','slides.min.jquery'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="80" style="margin-top: 0px;">

	<?php echo $this->element('topo')?>

	<div class="container">

		<?php echo $this->Session->flash(); ?>
		<?php  echo $this->fetch('content'); ?>

	</div>

	<?php echo $this->element('rodape',array('autora'=>'Bruna Chagas'))?>

</body>

</html>
