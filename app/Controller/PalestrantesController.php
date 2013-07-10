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

			//Add palestrante
			if($this->Palestrante->save($data)){
				$this->Session->setFlash('Palestrante e Palestra salvas com sucesso!','sucesso');
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('Erro ao adicionar! Tente novamente.','erro');
			}

		}	
	}

	//Mostra um palestrante

	public function view($id){
		$this->Palestrante->id = $id;
		$data = $this->Palestrante->read();

		$this->set('palestrante',$data);
	}
}

?>