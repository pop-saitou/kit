<?php
App::uses('AppController', 'Controller');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class StudentsController extends AppController {

				public $components = array('Paginator');
				public $uses = array("Student");

				public function login(){
								if($this->request->is("post")){
												//$passwordHasher = new SimplePasswordHasher();
												//debug($passwordHasher->hash($this->request->data("Student.password")));
												if($this->Auth->login()){
																return $this->redirect($this->Auth->redirectUrl());
												}
												else{
																$this->Session->setFlash("ユーザー名またはパスワードが間違っています。");
												}
								}
				}	

				public function add(){
								if($this->request->is("post")){
												$this->Student->create();
												if($this->Student->save($this->request->data)){
																$this->Auth->login();
																return $this->redirect("/");
												}
												else{
																$this->Session->setFlash("登録に失敗しました。もう一度お試しください。");
												}
								}
				}

				public function logout(){
								return $this->redirect($this->Auth->logout());
				}

				public function myPage(){
				
				}

				public function beforeFilter(){
								parent::beforeFilter();
								$this->Auth->allow("add","login","logout");
				}
}
