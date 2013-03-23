<?php
App::uses('AppController', 'Controller');
/**
 * Telefones Controller
 *
 * @property Telefone $Telefone
 */
class TelefonesController extends AppController {

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
		$this->Telefone->recursive = 0;
		$this->set('telefones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Telefone->exists($id)) {
			throw new NotFoundException(__('Invalid telefone'));
		}
		$options = array('conditions' => array('Telefone.' . $this->Telefone->primaryKey => $id));
		$this->set('telefone', $this->Telefone->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Telefone->create();
			if ($this->Telefone->save($this->request->data)) {
				$this->Session->setFlash(__('The telefone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The telefone could not be saved. Please, try again.'));
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
		if (!$this->Telefone->exists($id)) {
			throw new NotFoundException(__('Invalid telefone'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Telefone->save($this->request->data)) {
				$this->Session->setFlash(__('The telefone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The telefone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Telefone.' . $this->Telefone->primaryKey => $id));
			$this->request->data = $this->Telefone->find('first', $options);
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
		$this->Telefone->id = $id;
		if (!$this->Telefone->exists()) {
			throw new NotFoundException(__('Invalid telefone'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Telefone->delete()) {
			$this->Session->setFlash(__('Telefone deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Telefone was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
