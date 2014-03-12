<?php
App::uses('AppController', 'Controller');
class ResearchRoomsController extends AppController {
				public $uses = array("ResearchRoom","Student");

				public function index(){
								$researchRooms = $this->ResearchRoom->find(
												"all",
												array(
																"contain"=>array(
																				"Student"=>array(
																								"conditions"=>array(
																												"gpa > ?" => $this->Auth->user("gpa")
																								)
																				)
																)

												)
								);
								$me = $this->Student->find(
												"first",
												array(
																"conditions"=>array(
																				"Student.id"=>$this->Auth->user("id")
																),
																"contain"=>array(),
																"fields"=>array(
																				"username",
																				"research_room_id"
																)
												)
								);

								$this->set(compact("researchRooms","me"));
				}

				public function setRoom($id = null){
								if($id!=null){
												$this->Student->id = $this->Auth->user("id");
												if(!$this->Student->saveField("research_room_id",$id)){
																$this->Session->setFlash("なんらかのエラーが発生しました。");
												}
								}
								return $this->redirect(array("controller"=>"research_rooms","action"=>"index"));
				}
}
