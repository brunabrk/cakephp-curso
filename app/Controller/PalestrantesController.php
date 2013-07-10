<?php

class PalestrantesController extends AppController{
	
	public $uses = array('Palestrante','Palestra');

	
	public function index (){

		$params = array(
			'fields' => array('nome','descricao'),
			'order' => array('nome'=>'ASC'),
		);

		//Busca os palestrantes de acordo com o params
		$palestrantes = $this->Palestrante->find('all', $params);


		//Manda para view
		$this->set('palestrantes', $palestrantes);
	}

	//Add palestrantes e palestras
	public function add(){

		$data = $this->request->data;

		if($this->request->is('post') && !empty($data)){

			//Add palestrante e suas palestras correspondentes - usando saveAll
			if($this->Palestrante->saveAll($data)){
				$this->Session->setFlash('Palestrante e Palestra salvas com sucesso!','sucesso');
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('Erro ao adicionar! Tente novamente.','erro');
			}

		}

		$params = array(
			'fields' => array('nome','id'),
			'order' =>array('nome'=>'ASC'),
		);

		//lista de palestras
		$palestras = $this->Palestrante->Palestra->find('all',$params);

		$this->set('palestras',$palestras);
		
	}
}

?>