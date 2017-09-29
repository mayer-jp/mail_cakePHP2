<?php
App::uses('AppModel', 'Model');

class Form extends AppModel {
  //public $useTable = false; //DB不使用

  public $_schema = array(
    'name' => array('type' => 'string', 'length' => 255),
    'address' => array('type' => 'string', 'length' => 255),
    'subject' => array('type' => 'string'),
    'body' => array('type' => 'text'),
  );

  public $validate = array(
    'name' => array(
      'notBlank' => array(
        'rule' => array('notBlank'),
        'message' => 'お名前を入力してください。',
        //'allowEmpty' => false,
        //'required' => false,
        //'last' => false, // Stop validation after this rule
        //'on' => 'create', // Limit validation to 'create' or 'update' operations
      ),
    ),
    'address' => array(
      'notBlank' => array(
        'rule' => array('notBlank'),
        'message' => 'メールアドレスを入力してください。',
        //'allowEmpty' => false,
        //'required' => false,
        //'last' => false, // Stop validation after this rule
        //'on' => 'create', // Limit validation to 'create' or 'update' operations
      ),
      'email' => array(
        'rule' => 'email',
        'message' => 'メールアドレスを正しく入力してください。',
      ),
    ),
    'body' => array(
      'notBlank' => array(
        'rule' => array('notBlank'),
        'message' => 'お問い合わせ内容を入力してください。',
        //'allowEmpty' => false,
        //'required' => false,
        //'last' => false, // Stop validation after this rule
        //'on' => 'create', // Limit validation to 'create' or 'update' operations
      ),
    ),
  );
}
?>