<?php
App::uses('AppController', 'Controller');

class FormController extends AppController{
  //$this->request->isPost(); 非推奨

  //public $scaffold;

  public function index(){
    if($this->request->is('post')){
      $this->Form->create();
      if($this->Form->save($this->request->data)){
        //$this->Flash->success('送信しました');
        return $this->redirect(array('action' => 'send'));
      }else{
        $this->Flash->error('入力内容に誤りがあります');
      }
    }
  }

  public function send(){
  }
}
?>