<?php
App::uses('AppModel', 'Model');
/**
 * ItemCaixa Model
 *
 * @property Item $Item
 * @property Caixa $Caixa
 */
class ItemCaixa extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ItemCaixa';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'n';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'item_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'caixa_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'qtd_item_compra' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Caixa' => array(
			'className' => 'Caixa',
			'foreignKey' => 'caixa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
