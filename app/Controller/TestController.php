<?php
//App::uses('AppController', 'Controller');

class TestController extends AppController{

  public function index(){
    $result = $this->set('hensu', '僕には友達が少ないけどそれほどでもないがいいか');
  }
}
?>