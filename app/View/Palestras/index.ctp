<div class="row">
  <div class="span4">
    <h1>Lista de palestras</h1>
    <?php echo $this->Html->link('Add', array('controller'=>'palestras','action'=>'add'), array('class'=>'btn btn-primary','style'=>'margin-bottom: 5%'))?>
  </div>
</div>
<div class="span4"></div>
<table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Inicio</th>
        <th>Término</th>
        <th>Palestrante</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($palestras as $palestra):?>
        <tr>
          <td><?php echo h($palestra['Palestra']['nome']);?></td>
          <td><?php echo h($palestra['Palestra']['descricao']);?></td>
          <td><?php echo h(date("H:i", strtotime($palestra['Palestra']['inicio'])));?></td>
          <td><?php echo h(date('H:i', strtotime($palestra['Palestra']['fim'])));?></td>
          <td><?php $slugNome = Inflector::slug(strtolower($palestra['Palestrante']['nome']), '-');echo $this->Html->link($palestra['Palestrante']['nome'],'/palestrante/'.$slugNome.'/'.$palestra['Palestra']['palestrante_id']);?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>
