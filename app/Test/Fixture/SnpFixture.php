<?php
/**
 * SnpFixture
 *
 */
class SnpFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'snp';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'unigene_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'position' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'snp_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reference' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'alternative' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quality' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'filter' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'info' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'format' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'unigene_id' => 1,
			'position' => 1,
			'snp_id' => 'Lorem ipsum dolor sit amet',
			'reference' => 'Lorem ip',
			'alternative' => 'Lorem ip',
			'quality' => 'Lorem ip',
			'filter' => 'Lorem ip',
			'info' => 'Lorem ipsum dolor sit amet',
			'format' => 'Lorem ipsum dolor sit amet'
		),
	);

}
