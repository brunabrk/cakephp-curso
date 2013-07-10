<div class="row">
  <div class="span4">
    <h1>Lista de Palestrantes</h1>
    <?php echo $this->Html->link('Add', array('controller'=>'palestrantes','action'=>'add'), array('class'=>'btn btn-primary','style'=>'margin-bottom: 5%'))?>
  </div>
</div>
<div class="span4"></div>
<table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrição</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($palestrantes as $palestrante):?>
        <tr>
          <td><?php echo h($palestrante['Palestrante']['nome']);?></td>
          <td><?php echo h($palestrante['Palestrante']['descricao']);?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>
