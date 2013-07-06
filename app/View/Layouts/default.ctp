<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Cakephp Curso">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min','font-awesome.min','bootswatch','style'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="80" style="margin-top: 0px;">

	<?php //echo $this->Session->flash(); ?>

	<?php echo $this->element('topo')?>

	<?php echo $this->fetch('content'); ?>

	<?php echo $this->element('rodape',array('autora'=>'Bruna Chagas'))?>

</body>

</html>
