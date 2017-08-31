<?php
App::uses('AppModel', 'Model');
/**
 * MapInfo Model
 *
 * @property Map $Map
 * @property Planet $Planet
 * @property Houses $Houses
 * @property Sign $Sign
 */
class MapInfo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'map_id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Map' => array(
			'className' => 'Map',
			'foreignKey' => 'map_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Planet' => array(
			'className' => 'Planet',
			'foreignKey' => 'planet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Houses' => array(
			'className' => 'Houses',
			'foreignKey' => 'houses_id',
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
		)
	);
}
