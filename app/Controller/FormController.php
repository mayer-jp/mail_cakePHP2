<?php
App::uses('AppController', 'Controller');

class FormController extends AppController{

  public function index(){
    if($this->request->is('post')){
      $this->Form->create();
      if($this->Form->save($this->request->data)){
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