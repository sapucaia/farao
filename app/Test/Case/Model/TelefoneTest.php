<?php
App::uses('Telefone', 'Model');

/**
 * Telefone Test Case
 *
 */
class TelefoneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.telefone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Telefone = ClassRegistry::init('Telefone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Telefone);

		parent::tearDown();
	}

}
