<?php
App::uses('Unigene', 'Model');

/**
 * Unigene Test Case
 *
 */
class UnigeneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.unigene',
		'app.snp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Unigene = ClassRegistry::init('Unigene');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Unigene);

		parent::tearDown();
	}

}
