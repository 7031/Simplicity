<?php
class PagesController extends AppController {
	public $helpers = array('Html', 'Form');
	
	var $paginate = array(
		'limit' => 20,
		'order' => array(
			'Page.created' => 'desc'
		)
	);
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('view');
		$this->Auth->deny('index');
	}
	
	public function index() {
		$data = $this->paginate('Page');
		$this->set('pages', $data);
	}
	
	public function view($id = null) {
		$this->Page->id = $id;
		$this->set('page', $this->Page->read());
	}
	
	public function add() {
		if ($this->request->is('post')){
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash('Your page has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your page');
			}
		}
	}
	
	public function edit($id = null) {
		$this->Page->id = $id;
		$this->set('id', $id);
		if ($this->request->is('get')) {
			$this->request->data = $this->Page->read();
		} else {
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash('Your page has been updated');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your page');
			}
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Page->delete($id)) {
			$this->Session->setFlash('Page ID ' . $id . 'has been deleted sucessfully.');
			$this->redirect(array('action' => 'index'));
		}
	}
	
}