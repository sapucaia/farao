<?php
App::uses('Representante', 'Model');

/**
 * Representante Test Case
 *
 */
class RepresentanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.representante',
		'app.fornecedor_representante',
		'app.representante_endereco',
		'app.representante_telefone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Representante = ClassRegistry::init('Representante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Representante);

		parent::tearDown();
	}

}
