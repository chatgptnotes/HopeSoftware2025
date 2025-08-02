<?php
/* Languages Test cases generated on: 2011-11-23 10:36:43 : 1322044603*/
App::uses('LanguagesController', 'Controller');

/**
 * TestLanguagesController *
 */
class TestLanguagesController extends LanguagesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * LanguagesController Test Case
 *
 */
class LanguagesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.language', 'app.patient');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Languages = new TestLanguagesController();
		$this->Languages->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Languages);

		parent::tearDown();
	}

/**
 * testSuperadminIndex method
 *
 * @return void
 */
	public function testSuperadminIndex() {

	}

/**
 * testSuperadminView method
 *
 * @return void
 */
	public function testSuperadminView() {

	}

/**
 * testSuperadminAdd method
 *
 * @return void
 */
	public function testSuperadminAdd() {

	}

/**
 * testSuperadminEdit method
 *
 * @return void
 */
	public function testSuperadminEdit() {

	}

/**
 * testSuperadminDelete method
 *
 * @return void
 */
	public function testSuperadminDelete() {

	}

}
