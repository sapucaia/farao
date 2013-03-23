<?php
/**
 * FornecedorFixture
 *
 */
class FornecedorFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fornecedor';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'razao_social' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nome_fantasia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cnpj' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 18, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'razao_social' => 'Lorem ipsum dolor sit amet',
			'nome_fantasia' => 'Lorem ipsum dolor sit amet',
			'cnpj' => 'Lorem ipsum dolo'
		),
	);

}
