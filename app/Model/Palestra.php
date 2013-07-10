<?php

class Palestra extends AppModel{

	public $userTable = 'Palestras';

	public $belongsTo = array('Palestrante');

	public $validate = array(
		'nome' => array(
			array(
				'rule' => 'notEmpty',
				'message' => 'Campo obrigatório'
			),

			array(
				'rule' => 'isUnique',
				'message' => 'Palestra já cadastrada'
			)			
		),

		'inicio' => array(
			array(
				'rule' => 'notempty',
				'message' => 'Campo obrigatório.'
			),

			array(
				'rule' => 'time',
				'message' => 'Formato inválido (HH:MM).'
			)
		),

		'fim' => array(
			array(
				'rule' => 'notempty',
				'message' => 'Campo obrigatório.'
			),

			array(
				'rule' => 'time',
				'message' => 'Formato inválido (HH:MM).'
			)
		),

	);

}

?>