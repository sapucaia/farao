<?php
App::uses('ItemCaixa', 'Model');

/**
 * ItemCaixa Test Case
 *
 */
class ItemCaixaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_caixa',
		'app.item',
		'app.tipo_item',
		'app.caixa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemCaixa = ClassRegistry::init('ItemCaixa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemCaixa);

		parent::tearDown();
	}

}
