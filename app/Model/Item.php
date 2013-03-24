<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 * @property TipoItem $TipoItem
 */
class Item extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Item';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';


public $validate = array(
		
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'valor' => array(
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
		'TipoItem' => array(
                        'className' => 'TipoItem',
			'foreignKey' => 'tipo_item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
