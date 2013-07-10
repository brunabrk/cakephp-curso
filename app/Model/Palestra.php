<?php

class Palestra extends AppModel{

	public $userTable = 'Palestras';

	public $belongsTo = array('Palestrante');

	public $validate = array(
		'nome' => array(
			array(
				'rule' => 'notempty',
				'message' => 'Campo obrigatório'
			),			
		),

	);

}

?>