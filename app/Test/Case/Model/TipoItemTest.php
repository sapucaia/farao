<?php
App::uses('TipoItem', 'Model');

/**
 * TipoItem Test Case
 *
 */
class TipoItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_item',
		'app.item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoItem = ClassRegistry::init('TipoItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoItem);

		parent::tearDown();
	}

}
