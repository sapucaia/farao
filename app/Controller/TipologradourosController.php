<?php
App::uses('AppController', 'Controller');
/**
 * Tipologradouros Controller
 *
 * @property Tipologradouro $Tipologradouro
 */
class TipologradourosController extends AppController {

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
		$this->Tipologradouro->recursive = 0;
		$this->set('tipologradouros', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipologradouro->exists($id)) {
			throw new NotFoundException(__('Invalid tipologradouro'));
		}
		$options = array('conditions' => array('Tipologradouro.' . $this->Tipologradouro->primaryKey => $id));
		$this->set('tipologradouro', $this->Tipologradouro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipologradouro->create();
			if ($this->Tipologradouro->save($this->request->data)) {
				$this->Session->setFlash(__('The tipologradouro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipologradouro could not be saved. Please, try again.'));
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
		if (!$this->Tipologradouro->exists($id)) {
			throw new NotFoundException(__('Invalid tipologradouro'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipologradouro->save($this->request->data)) {
				$this->Session->setFlash(__('The tipologradouro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipologradouro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tipologradouro.' . $this->Tipologradouro->primaryKey => $id));
			$this->request->data = $this->Tipologradouro->find('first', $options);
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
		$this->Tipologradouro->id = $id;
		if (!$this->Tipologradouro->exists()) {
			throw new NotFoundException(__('Invalid tipologradouro'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tipologradouro->delete()) {
			$this->Session->setFlash(__('Tipologradouro deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipologradouro was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
