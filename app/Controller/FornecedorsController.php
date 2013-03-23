<?php
App::uses('AppController', 'Controller');
/**
 * Fornecedors Controller
 *
 * @property Fornecedor $Fornecedor
 */
class FornecedorsController extends AppController {

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
		$this->Fornecedor->recursive = 0;
		$this->set('fornecedors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fornecedor->exists($id)) {
			throw new NotFoundException(__('Invalid fornecedor'));
		}
		$options = array('conditions' => array('Fornecedor.' . $this->Fornecedor->primaryKey => $id));
		$this->set('fornecedor', $this->Fornecedor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fornecedor->create();
			if ($this->Fornecedor->save($this->request->data)) {
				$this->Session->setFlash(__('The fornecedor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fornecedor could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fornecedor->exists($id)) {
			throw new NotFoundException(__('Invalid fornecedor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fornecedor->save($this->request->data)) {
				$this->Session->setFlash(__('The fornecedor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fornecedor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fornecedor.' . $this->Fornecedor->primaryKey => $id));
			$this->request->data = $this->Fornecedor->find('first', $options);
		}
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
		$this->Fornecedor->id = $id;
		if (!$this->Fornecedor->exists()) {
			throw new NotFoundException(__('Invalid fornecedor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fornecedor->delete()) {
			$this->Session->setFlash(__('Fornecedor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fornecedor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
