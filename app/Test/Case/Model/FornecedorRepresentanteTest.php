<?php
App::uses('FornecedorRepresentante', 'Model');

/**
 * FornecedorRepresentante Test Case
 *
 */
class FornecedorRepresentanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fornecedor_representante',
		'app.fornecedor',
		'app.representante',
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
		$this->FornecedorRepresentante = ClassRegistry::init('FornecedorRepresentante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FornecedorRepresentante);

		parent::tearDown();
	}

}
