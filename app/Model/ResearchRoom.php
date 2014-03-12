<?php
App::uses('AppModel', 'Model');
/**
 * ResearchRoom Model
 *
 * @property Student $Student
 */
class ResearchRoom extends AppModel {

				/**
				 * Display field
				 *
				 * @var string
				 */
				public $displayField = 'name';

				/**
				 * Validation rules
				 *
				 * @var array
				 */
				public $validate = array(
								'name' => array(
												'alphanumeric' => array(
																'rule' => array('alphanumeric'),
																//'message' => 'Your custom message here',
																//'allowEmpty' => false,
																//'required' => false,
																//'last' => false, // Stop validation after this rule
																//'on' => 'create', // Limit validation to 'create' or 'update' operations
												),
								),
				);

				public $actsAs = array(
								"Containable"
				);

				//The Associations below have been created with all possible keys, those that are not needed can be removed

				/**
				 * hasMany associations
				 *
				 * @var array
				 */
				public $hasMany = array(
								'Student' => array(
												'className' => 'Student',
												'foreignKey' => 'research_room_id',
												'dependent' => false,
												'conditions' => '',
												'fields' => '',
												'order' => '',
												'limit' => '',
												'offset' => '',
												'exclusive' => '',
												'finderQuery' => '',
												'counterQuery' => ''
								)
				);

}
