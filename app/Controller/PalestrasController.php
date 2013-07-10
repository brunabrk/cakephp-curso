<?php
class PalestrasController extends AppController{

	public $uses = 'Palestra';

	//Mostrando palestras
	public function index(){

		$params = array(
			'order' => array('inicio'=>'ASC'),
			//'fields' => array('nome', 'inicio','fim','descricao')
		);

		$palestras = $this->Palestra->find('all', $params);


		//Manda para view
		$this->set('palestras', $palestras);
	}

	//Adicionando palestra
	public function add(){

		$data = $this->request->data;

		if($this->request->is('post') && !empty($data)){
			if($this->Palestra->save($data)){
				$this->Session->setFlash('Palestra cadastrada com sucesso!','sucesso');
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('Erro ao cadastrar palestra','erro');
			}
		}

		$palestrantes = $this->Palestra->Palestrante->find('list', array('fields'=>array('id','nome')));
		$this->set('palestrantes',$palestrantes);
	}
}
?>