<?php

class Palestrante extends AppModel{

	public $userTable = 'Palestrantes';

	public $hasMany = array('Palestra');

	public $validate = array(

		'nome' => array(
			'rule' => 'notempty',
			'message' => 'Campo obrigatório.'
		),

		'descricao' => array(
			'rule' => 'notempty',
			'message' => 'Campo obrigatório.'
		),

		'endereco_site' => array(
			'rule' => 'url'
		)
	);
}
?>