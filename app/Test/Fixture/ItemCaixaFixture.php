<?php
/**
 * ItemCaixaFixture
 *
 */
class ItemCaixaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ItemCaixa';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'caixa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'qtd_item_compra' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'item_id' => array('column' => 'item_id', 'unique' => 0),
			'caixa_id' => array('column' => 'caixa_id', 'unique' => 0)
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
			'item_id' => 1,
			'caixa_id' => 1,
			'qtd_item_compra' => 'Lorem ip'
		),
	);

}
