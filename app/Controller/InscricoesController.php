<?php

class InscricoesController extends AppController{

	//Usado para indicar qual é a Model corresponde - Comentando porque usei Inflector
	//public $uses = array('Inscricao');

	public function inscrever(){
		$data = $this->request->data;
		if($this->request->is('post') && !empty($data)){
			if($this->Inscricao->save($data)){

				//$this->Session->setFlash('Inscricao realizada com sucesso','inscricao-sucesso');
				$this->redirect('/inscricao-sucesso');

			}else{
				$this->Session->setFlash('Erro ao realizar inscrição, por favor tente mais tarde.','inscricao-erro');
			}
		}
	}
}