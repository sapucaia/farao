<?php
App::uses('AppModel', 'Model');
/**
 * FornecedorRepresentante Model
 *
 * @property Fornecedor $Fornecedor
 * @property Representante $Representante
 */
class FornecedorRepresentante extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'FornecedorRepresentante';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'representante_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'fornecedor_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'representante_id' => array(
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
		'Fornecedor' => array(
			'className' => 'Fornecedor',
			'foreignKey' => 'fornecedor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Representante' => array(
			'className' => 'Representante',
			'foreignKey' => 'representante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
