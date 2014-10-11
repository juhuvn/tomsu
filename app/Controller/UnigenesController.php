<?php
App::uses('AppController', 'Controller');
/**
 * Unigenes Controller
 *
 * @property Unigene $Unigene
 * @property PaginatorComponent $Paginator
 */
class UnigenesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Unigene->recursive = 0;
		$this->set('unigenes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Unigene->exists($id)) {
			throw new NotFoundException(__('Invalid unigene'));
		}
		$options = array('conditions' => array('Unigene.' . $this->Unigene->primaryKey => $id));
		$this->set('unigene', $this->Unigene->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Unigene->create();
			if ($this->Unigene->save($this->request->data)) {
				$this->Session->setFlash(__('The unigene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unigene could not be saved. Please, try again.'));
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
		if (!$this->Unigene->exists($id)) {
			throw new NotFoundException(__('Invalid unigene'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Unigene->save($this->request->data)) {
				$this->Session->setFlash(__('The unigene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unigene could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Unigene.' . $this->Unigene->primaryKey => $id));
			$this->request->data = $this->Unigene->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Unigene->id = $id;
		if (!$this->Unigene->exists()) {
			throw new NotFoundException(__('Invalid unigene'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Unigene->delete()) {
			$this->Session->setFlash(__('The unigene has been deleted.'));
		} else {
			$this->Session->setFlash(__('The unigene could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Unigene->recursive = 0;
		$this->set('unigenes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Unigene->exists($id)) {
			throw new NotFoundException(__('Invalid unigene'));
		}
		$options = array('conditions' => array('Unigene.' . $this->Unigene->primaryKey => $id));
		$this->set('unigene', $this->Unigene->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Unigene->create();
			if ($this->Unigene->save($this->request->data)) {
				$this->Session->setFlash(__('The unigene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unigene could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Unigene->exists($id)) {
			throw new NotFoundException(__('Invalid unigene'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Unigene->save($this->request->data)) {
				$this->Session->setFlash(__('The unigene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unigene could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Unigene.' . $this->Unigene->primaryKey => $id));
			$this->request->data = $this->Unigene->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Unigene->id = $id;
		if (!$this->Unigene->exists()) {
			throw new NotFoundException(__('Invalid unigene'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Unigene->delete()) {
			$this->Session->setFlash(__('The unigene has been deleted.'));
		} else {
			$this->Session->setFlash(__('The unigene could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
