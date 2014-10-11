<?php
App::uses('AppModel', 'Model');
/**
 * Snp Model
 *
 * @property Unigene $Unigene
 */
class Snp extends AppModel {

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
	public $useTable = 'snp';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'snp_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Unigene' => array(
			'className' => 'Unigene',
			'foreignKey' => 'unigene_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
