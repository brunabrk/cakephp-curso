<div class="navbar navbar-fixed-top">
   	<div class="navbar-inner">
     <div class="container" style="width: 85%;">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <?php echo $this->Html->link('CookCake','/',array('class'=>'brand'))?> 

       <div class="nav-collapse collapse" id="main-menu">

	        <ul class="nav pull-right" id="main-menu-right">
              <li><?php echo $this->Html->link('Sobre o evento',array('controller'=>'pages','action'=>'display','sobre-evento'));?></li>
              <li><?php echo $this->Html->link('Local do evento',array('controller'=>'pages','action'=>'display','como-chegar'));//echo $this->?>
              </li>
	          	<li><?php echo $this->Html->link('Galeria', array('controller'=>'pages','action'=>'display','galeria'));?></li>
              <li><?php echo $this->Html->link('Inscrições', array('controller'=>'inscricoes', 'action' => 'inscrever'));?></li> 
              <li><?php echo $this->Html->link('Palestrantes', array('controller'=>'palestrantes', 'action' => 'index'));?></li>    
              <li><?php echo $this->Html->link('Palestras', array('controller'=>'palestras', 'action'=>'index'))?></li>        
        	</ul>

       </div>

     </div>

   </div>
   
</div>