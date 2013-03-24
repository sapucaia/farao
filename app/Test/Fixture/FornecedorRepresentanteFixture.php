<?php
/**
 * FornecedorRepresentanteFixture
 *
 */
class FornecedorRepresentanteFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'FornecedorRepresentante';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'fornecedor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'representante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'fornecedor_id' => array('column' => 'fornecedor_id', 'unique' => 0),
			'representante_id' => array('column' => 'representante_id', 'unique' => 0)
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
			'fornecedor_id' => 1,
			'representante_id' => 1
		),
	);

}
