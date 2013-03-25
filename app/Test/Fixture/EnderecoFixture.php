<?php
/**
 * EnderecoFixture
 *
 */
class EnderecoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Endereco';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'logradouro' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_logradouro_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'bairro' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cep' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'complemento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cidade_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'tipo_logradouro_id' => array('column' => 'tipo_logradouro_id', 'unique' => 0),
			'cidade_id' => array('column' => 'cidade_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'logradouro' => 'Lorem ipsum dolor sit amet',
			'tipo_logradouro_id' => 1,
			'bairro' => 'Lorem ipsum dolor sit amet',
			'cep' => 'Lorem ',
			'complemento' => 'Lorem ipsum dolor sit a',
			'cidade_id' => 1
		),
	);

}
