<?php
App::uses('AppController', 'Controller');
/**
 * TipoItems Controller
 *
 * @property TipoItem $TipoItem
 */
class TipoItemsController extends AppController {

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
		$this->TipoItem->recursive = 0;
		$this->set('tipoItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoItem->exists($id)) {
			throw new NotFoundException(__('Invalid tipo item'));
		}
		$options = array('conditions' => array('TipoItem.' . $this->TipoItem->primaryKey => $id));
		$this->set('tipoItem', $this->TipoItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoItem->create();
			if ($this->TipoItem->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo item could not be saved. Please, try again.'));
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
		if (!$this->TipoItem->exists($id)) {
			throw new NotFoundException(__('Invalid tipo item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TipoItem->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoItem.' . $this->TipoItem->primaryKey => $id));
			$this->request->data = $this->TipoItem->find('first', $options);
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
		$this->TipoItem->id = $id;
		if (!$this->TipoItem->exists()) {
			throw new NotFoundException(__('Invalid tipo item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TipoItem->delete()) {
			$this->Session->setFlash(__('Tipo item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipo item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
