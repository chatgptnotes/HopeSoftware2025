
<?php

/**
 * PHP 5
 * @author        Dinesh tawade
 */
 
class NewSurgeryData extends AppModel {

	public $name = 'NewSurgeryData';

	public $useTable = 'new_surgery_cghs';
	public $specific = true;
	public function __construct($id = false, $table = null, $ds = null) {
		$session = new cakeSession();
		$this->db_name =  $session->read('db_name');
		parent::__construct($id, $table, $ds);
	}



}