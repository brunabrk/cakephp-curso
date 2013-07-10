<?php
class inscricao extends AppModel{
	//Usado para indicar qual é a coluna corresponde - Comentando porque usei Inflector
	//public $userTable = 'inscricoes';

	public $order = array('nome'=>'ASC');

	public $validate = array(
		'nome' => array(
			'rule' => 'notempty',
			'message' => 'Nome é obrigatório!'
		),

		'email'=> array(
			array(
				'rule' => 'email',
				'message' => 'Email inválido.',
			),
			array(
				'rule'=> 'notempty',
				'message' =>'Email é obrigatório'
			),
			array(
				'rule' => 'isUnique',
				'message' => 'Email já cadastrado!'
			)
		),

		'telefone' => array(
			array(
			'rule' => 'notempty',
			'message' => 'Telefone é obrigatório!'
			),
			array(
				'rule' => 'numeric',
				'message' => 'Telefone inválido.'
			)
		),

		'endereco' => array(
			array(
				'rule'=>'notempty',
				'message'=>'Campo obrigatório.'
			),
			array(
				'rule'=>array('minLength','11'),
				'message' => 'Mínimo 11 caracteres.'
			)
		)
	);
}