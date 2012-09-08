<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'Form');
	
	var $paginate = array(
		'limit' => 10,
		'order' => array(
			'Post.created' => 'desc'
		)
	);
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->deny('aindex');
	}
	
	public function index() {
		$data = $this->paginate('Post');
		$this->set('posts', $data);
	}
	
	public function postlist() {
		$data = $this->paginate('Post');
		$this->set('posts', $data);
	}
	
	public function view($id = null) {
		$this->Post->id = $id;
		$this->set('post', $this->Post->read());
	}
	
	public function add() {
		if ($this->request->is('post')){
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your post');
			}
		}
	}
	
	public function edit($id = null) {
		$this->Post->id = $id;
		$this->set('id', $id);
		if ($this->request->is('get')) {
			$this->request->data = $this->Post->read();
		} else {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been updated');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your post');
			}
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Post->delete($id)) {
			$this->Session->setFlash('Post ID ' . $id . 'has been deleted sucessfully.');
			$this->redirect(array('action' => 'index'));
		}
	}
}
