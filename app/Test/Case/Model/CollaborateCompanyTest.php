<?php
/* CollaborateCompany Test cases generated on: 2011-11-24 07:05:03 : 1322118303*/
App::uses('CollaborateCompany', 'Model');

/**
 * CollaborateCompany Test Case
 *
 */
class CollaborateCompanyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.collaborate_company', 'app.patient');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CollaborateCompany = ClassRegistry::init('CollaborateCompany');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CollaborateCompany);

		parent::tearDown();
	}

}
