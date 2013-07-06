<?php
class inscricao extends AppModel{
	//Usado para indicar qual é a coluna corresponde - Comentando porque usei Inflector
	//public $userTable = 'inscricoes';

	public $order = array('nome'=>'ASC');

	public $validate = array(

		'email'=> array(
			'email' => array(
				'rule' => array('email','notempty'),
				'message' => 'Email inválido.',
			)
		)
	);
}