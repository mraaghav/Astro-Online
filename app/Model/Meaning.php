<?php
App::uses('AppModel', 'Model');
/**
 * Meaning Model
 *
 * @property Planet $Planet
 * @property Sign $Sign
 * @property House $House
 */
class Meaning extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'description';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Planet' => array(
			'className' => 'Planet',
			'foreignKey' => 'planet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sign' => array(
			'className' => 'Sign',
			'foreignKey' => 'sign_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'House' => array(
			'className' => 'House',
			'foreignKey' => 'house_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
