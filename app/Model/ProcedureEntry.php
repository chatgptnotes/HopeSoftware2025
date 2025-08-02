<?php

App::uses('AppModel', 'Model');

/**
 * Beneficiary Model
 *
 */
class ProcedureEntry extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $useTable = 'procedure_entries';
    Public $useDbConfig = 'defaultHospital';

    public $name = 'ProcedureEntry';
    // // public $useDbConfig = $test;
    //     public $validate = array(
    //     'location' => array(
    //         'notempty' => array(
    //             'rule' => array('notempty'),
    //         //'message' => 'Your custom message here',
    //         //'allowEmpty' => false,
    //         //'required' => false,
    //         //'last' => false, // Stop validation after this rule
    //         //'on' => 'create', // Limit validation to 'create' or 'update' operations
    //         ),
    //     ),
    //     'language' => array(
    //         'notempty' => array(
    //             'rule' => array('notempty'),
    //         //'message' => 'Your custom message here',
    //         //'allowEmpty' => false,
    //         //'required' => false,
    //         //'last' => false, // Stop validation after this rule
    //         //'on' => 'create', // Limit validation to 'create' or 'update' operations
    //         ),
    //     ),
    //     // 'sex' => array(
    //     //     'numeric' => array(
    //     //         'rule' => array('enum'),
    //         //'message' => 'Your custom message here',
    //         //'allowEmpty' => false,
    //         //'required' => false,
    //         //'last' => false, // Stop validation after this rule
    //         //'on' => 'create', // Limit validation to 'create' or 'update' operations
    //     //     ),
    //     // ),
    //     'age' => array(
    //         'date' => array(
    //             'rule' => array('numeric'),
    //         //'message' => 'Your custom message here',
    //         //'allowEmpty' => false,
    //         //'required' => false,
    //         //'last' => false, // Stop validation after this rule
    //         //'on' => 'create', // Limit validation to 'create' or 'update' operations
    //         ),
    //     ),
    // );

}