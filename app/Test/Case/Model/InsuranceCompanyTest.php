<?php
/* InsuranceCompany Test cases generated on: 2011-11-24 06:11:38 : 1322115098*/
App::uses('InsuranceCompany', 'Model');

/**
 * InsuranceCompany Test Case
 *
 */
class InsuranceCompanyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.insurance_company', 'app.city', 'app.state', 'app.patient');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->InsuranceCompany = ClassRegistry::init('InsuranceCompany');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InsuranceCompany);

		parent::tearDown();
	}

}
