<?php
App::uses('AppController', 'Controller');
/**
 * Representantes Controller
 *
 * @property Representante $Representante
 */
class RepresentantesController extends AppController {

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
		$this->Representante->recursive = 0;
		$this->set('representantes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Representante->exists($id)) {
			throw new NotFoundException(__('Invalid representante'));
		}
		$options = array('conditions' => array('Representante.' . $this->Representante->primaryKey => $id));
		$this->set('representante', $this->Representante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Representante->create();
			if ($this->Representante->save($this->request->data)) {
				$this->Session->setFlash(__('The representante has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The representante could not be saved. Please, try again.'));
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
		if (!$this->Representante->exists($id)) {
			throw new NotFoundException(__('Invalid representante'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Representante->save($this->request->data)) {
				$this->Session->setFlash(__('The representante has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The representante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Representante.' . $this->Representante->primaryKey => $id));
			$this->request->data = $this->Representante->find('first', $options);
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
		$this->Representante->id = $id;
		if (!$this->Representante->exists()) {
			throw new NotFoundException(__('Invalid representante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Representante->delete()) {
			$this->Session->setFlash(__('Representante deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Representante was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
