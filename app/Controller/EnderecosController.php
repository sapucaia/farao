<?php
App::uses('AppController', 'Controller');
/**
 * Enderecos Controller
 *
 * @property Endereco $Endereco
 */
class EnderecosController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Endereco->recursive = 0;
		$this->set('enderecos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Endereco->exists($id)) {
			throw new NotFoundException(__('Invalid endereco'));
		}
		$options = array('conditions' => array('Endereco.' . $this->Endereco->primaryKey => $id));
		$this->set('endereco', $this->Endereco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Endereco->create();
			if ($this->Endereco->save($this->request->data)) {
				$this->Session->setFlash(__('The endereco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The endereco could not be saved. Please, try again.'));
			}
		}
		$tipoLogradouros = $this->Endereco->TipoLogradouro->find('list');
		$cidades = $this->Endereco->Cidade->find('list');
		$this->set(compact('tipoLogradouros', 'cidades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Endereco->exists($id)) {
			throw new NotFoundException(__('Invalid endereco'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Endereco->save($this->request->data)) {
				$this->Session->setFlash(__('The endereco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The endereco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Endereco.' . $this->Endereco->primaryKey => $id));
			$this->request->data = $this->Endereco->find('first', $options);
		}
		$tipoLogradouros = $this->Endereco->TipoLogradouro->find('list');
		$cidades = $this->Endereco->Cidade->find('list');
		$this->set(compact('tipoLogradouros', 'cidades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Endereco->id = $id;
		if (!$this->Endereco->exists()) {
			throw new NotFoundException(__('Invalid endereco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Endereco->delete()) {
			$this->Session->setFlash(__('Endereco deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Endereco was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
