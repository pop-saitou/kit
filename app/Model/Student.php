<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
//App::uses('SimplePasswordHasher','Controller/Component/Auth');
class Student extends AppModel {

				public $displayField = 'username';

				public $actsAs = array(
								"Containable"
				);

				public $validate = array(
								'username' => array(
												'alphanumeric' => array(
																'rule' => array('alphanumeric'),
																//'message' => 'Your custom message here',
																//'allowEmpty' => false,
																//'required' => false,
																//'last' => false, // Stop validation after this rule
																//'on' => 'create', // Limit validation to 'create' or 'update' operations
												),
												"isUnique" => array(
																"rule"=>array("isUnique"),
																"message"=>array("ユーザー名が重複しています")
												)
								),
								'password' => array(
												'alphanumeric' => array(
																'rule' => array('alphanumeric'),
																//'message' => 'Your custom message here',
																//'allowEmpty' => false,
																//'required' => false,
																//'last' => false, // Stop validation after this rule
																//'on' => 'create', // Limit validation to 'create' or 'update' operations
												),
												"identicalFieldValues"=>array(
																'rule' => array('identicalFieldValues', 'password_check' ), 
																'message' => 'パスワードが一致しません。' 	
												)
								),
								'gpa' => array(
												'decimal' => array(
																'rule' => array('decimal',2),
																'message' => "小数点二桁の数字を入力してください。",
																//'allowEmpty' => false,
																//'required' => false,
																//'last' => false, // Stop validation after this rule
																//'on' => 'create', // Limit validation to 'create' or 'update' operations
												),
								),
								'email' => array(
												'email' => array(
																'rule' => array('email'),
																//'message' => 'Your custom message here',
																//'allowEmpty' => false,
																//'required' => false,
																//'last' => false, // Stop validation after this rule
																//'on' => 'create', // Limit validation to 'create' or 'update' operations
												),
												"isUnique"=>array(
																"rule"=>array("isUnique"),
																"message"=>"メールアドレスが重複しています。"
												)
								),
				);

				public $belongsTo = array(
								'ResearchRoom' => array(
												'className' => 'ResearchRoom',
												'foreignKey' => 'research_room_id',
												"counterCache"=>true
								)
				);

				public function beforeSave($options = array()){
								if (isset($this->data[$this->alias]['password'])) {
												$passwordHasher = new SimplePasswordHasher();
												$this->data[$this->alias]["password"] = $passwordHasher->hash(
																$this->data[$this->alias]["password"]
												);
								}
								return true;
				}

				function identicalFieldValues( $field=array(), $compare_field=null ){ 
								foreach( $field as $key => $value ){ 
												$v1 = $value; 
												$v2 = $this->data[$this->name][ $compare_field ];                  
												if($v1 !== $v2) { 
																return false; 
												} else { 
																continue; 
												} 
								} 
								return true; 
				} 
}
