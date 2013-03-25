<?php
App::uses('AppController', 'Controller');
/**
 * ItemCaixas Controller
 *
 * @property ItemCaixa $ItemCaixa
 */
class ItemCaixasController extends AppController {

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
		$this->ItemCaixa->recursive = 0;
		$this->set('itemCaixas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemCaixa->exists($id)) {
			throw new NotFoundException(__('Invalid item caixa'));
		}
		$options = array('conditions' => array('ItemCaixa.' . $this->ItemCaixa->primaryKey => $id));
		$this->set('itemCaixa', $this->ItemCaixa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemCaixa->create();
			if ($this->ItemCaixa->save($this->request->data)) {
				$this->Session->setFlash(__('The item caixa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item caixa could not be saved. Please, try again.'));
			}
		}
		$items = $this->ItemCaixa->Item->find('list');
		$caixas = $this->ItemCaixa->Caixa->find('list');
		$this->set(compact('items', 'caixas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemCaixa->exists($id)) {
			throw new NotFoundException(__('Invalid item caixa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemCaixa->save($this->request->data)) {
				$this->Session->setFlash(__('The item caixa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item caixa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemCaixa.' . $this->ItemCaixa->primaryKey => $id));
			$this->request->data = $this->ItemCaixa->find('first', $options);
		}
		$items = $this->ItemCaixa->Item->find('list');
		$caixas = $this->ItemCaixa->Caixa->find('list');
		$this->set(compact('items', 'caixas'));
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
		$this->ItemCaixa->id = $id;
		if (!$this->ItemCaixa->exists()) {
			throw new NotFoundException(__('Invalid item caixa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemCaixa->delete()) {
			$this->Session->setFlash(__('Item caixa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Item caixa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
