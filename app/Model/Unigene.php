<?php
App::uses('AppModel', 'Model');
/**
 * Unigene Model
 *
 * @property Snp $Snp
 */
class Unigene extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'tomsu';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'unigene';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Snp' => array(
			'className' => 'Snp',
			'foreignKey' => 'unigene_id',
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
