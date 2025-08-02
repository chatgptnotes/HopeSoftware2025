<?php
/* Ethnicity Test cases generated on: 2011-11-24 06:54:30 : 1322117670*/
App::uses('Ethnicity', 'Model');

/**
 * Ethnicity Test Case
 *
 */
class EthnicityTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ethnicity', 'app.patient');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Ethnicity = ClassRegistry::init('Ethnicity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ethnicity);

		parent::tearDown();
	}

}
