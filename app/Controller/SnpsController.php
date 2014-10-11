<?php
App::uses('AppController', 'Controller');
/**
 * Snps Controller
 *
 * @property Snp $Snp
 * @property PaginatorComponent $Paginator
 */
class SnpsController extends AppController {

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
		$this->Snp->recursive = 0;
		$this->set('snps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Snp->exists($id)) {
			throw new NotFoundException(__('Invalid snp'));
		}
		$options = array('conditions' => array('Snp.' . $this->Snp->primaryKey => $id));
		$this->set('snp', $this->Snp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Snp->create();
			if ($this->Snp->save($this->request->data)) {
				$this->Session->setFlash(__('The snp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snp could not be saved. Please, try again.'));
			}
		}
		$unigenes = $this->Snp->Unigene->find('list');
		$this->set(compact('unigenes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Snp->exists($id)) {
			throw new NotFoundException(__('Invalid snp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snp->save($this->request->data)) {
				$this->Session->setFlash(__('The snp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snp.' . $this->Snp->primaryKey => $id));
			$this->request->data = $this->Snp->find('first', $options);
		}
		$unigenes = $this->Snp->Unigene->find('list');
		$this->set(compact('unigenes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Snp->id = $id;
		if (!$this->Snp->exists()) {
			throw new NotFoundException(__('Invalid snp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snp->delete()) {
			$this->Session->setFlash(__('The snp has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Snp->recursive = 0;
		$this->set('snps', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Snp->exists($id)) {
			throw new NotFoundException(__('Invalid snp'));
		}
		$options = array('conditions' => array('Snp.' . $this->Snp->primaryKey => $id));
		$this->set('snp', $this->Snp->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Snp->create();
			if ($this->Snp->save($this->request->data)) {
				$this->Session->setFlash(__('The snp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snp could not be saved. Please, try again.'));
			}
		}
		$unigenes = $this->Snp->Unigene->find('list');
		$this->set(compact('unigenes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Snp->exists($id)) {
			throw new NotFoundException(__('Invalid snp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snp->save($this->request->data)) {
				$this->Session->setFlash(__('The snp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snp.' . $this->Snp->primaryKey => $id));
			$this->request->data = $this->Snp->find('first', $options);
		}
		$unigenes = $this->Snp->Unigene->find('list');
		$this->set(compact('unigenes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Snp->id = $id;
		if (!$this->Snp->exists()) {
			throw new NotFoundException(__('Invalid snp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snp->delete()) {
			$this->Session->setFlash(__('The snp has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
