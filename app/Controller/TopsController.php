<?php
App::uses('AppController', 'Controller');
class TopsController extends AppController {
				public $uses = false;

				public function index(){
				
				}


				public function beforeFilter(){
								parent::beforeFilter();
								$this->Auth->allow("index");
				}
}

