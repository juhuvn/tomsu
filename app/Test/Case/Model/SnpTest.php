<?php
App::uses('Snp', 'Model');

/**
 * Snp Test Case
 *
 */
class SnpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.snp',
		'app.unigene'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Snp = ClassRegistry::init('Snp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Snp);

		parent::tearDown();
	}

}
