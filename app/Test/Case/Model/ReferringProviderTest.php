<?php
/* ReferringProvider Test cases generated on: 2011-11-24 07:12:50 : 1322118770*/
App::uses('ReferringProvider', 'Model');

/**
 * ReferringProvider Test Case
 *
 */
class ReferringProviderTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.referring_provider', 'app.patient');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ReferringProvider = ClassRegistry::init('ReferringProvider');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReferringProvider);

		parent::tearDown();
	}

}
