<?php
App::uses('AppController', 'Controller');
/**
 * Flyers Controller
 *
 * @property Flyer $Flyer
 */
class FlyersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Flyer->recursive = 0;
		$this->set('flyers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Flyer->exists($id)) {
			throw new NotFoundException(__('Invalid flyer'));
		}
		$options = array('conditions' => array('Flyer.' . $this->Flyer->primaryKey => $id));
		$this->set('flyer', $this->Flyer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Flyer->create();
			if ($this->Flyer->save($this->request->data)) {
				$this->Session->setFlash(__('The flyer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flyer could not be saved. Please, try again.'));
			}
		}
		$templates = $this->Flyer->Template->find('list');
		$this->set(compact('templates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Flyer->exists($id)) {
			throw new NotFoundException(__('Invalid flyer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Flyer->save($this->request->data)) {
				$this->Session->setFlash(__('The flyer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flyer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Flyer.' . $this->Flyer->primaryKey => $id));
			$this->request->data = $this->Flyer->find('first', $options);
		}
		$templates = $this->Flyer->Template->find('list');
		$this->set(compact('templates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Flyer->id = $id;
		if (!$this->Flyer->exists()) {
			throw new NotFoundException(__('Invalid flyer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Flyer->delete()) {
			$this->Session->setFlash(__('Flyer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Flyer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
