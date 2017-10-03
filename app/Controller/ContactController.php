<?php
App::uses('AppController', 'Controller');

class ContactController extends AppController{

  public function index(){
    
    if(!$this->request->is('post') || !$this->request->data){
      return;
    }
  
    $result = $this->Contact->set($this->request->data);

    if(!$this->Contact->validates()){
      $this->Session->setFlash('入力内容に誤りがあります。');
      return;
    }

    switch ($this->request->data['confirm']){
      case 'confirm':
        $sub_text = $this->subject($result['Contact']['subject']);
        $this->set('sub_text', $sub_text);

        $this->render('check');
        break;

      case 'send':
        if($this->sendContact($this->request->data['Contact'])){
          $this->sendCustomer($this->request->data['Contact']);
          $this->redirect('send');
        }else{
          $this->Session->setFlash('エラーが発生しました。');
        }
        break;
    }
  }
  
  private function sendContact($content){
    App::uses('CakeEmail', 'Network/Email');

    $sub_text = $this->subject($this->request->data['Contact']['subject']);
    $sub_text = '【お問い合わせ】'.$sub_text.'について';

    $Email = new CakeEmail('contact');
    $Email->subject($sub_text);
    $Email->viewVars($content); //本文表示
    $Email->template('contact', 'contact'); //view, layout
    $Email->send();

    return true;
  }

  private function sendCustomer($content){
    App::uses('CakeEmail', 'Network/Email');

    $Email = new CakeEmail('contact');
    $Email->template('signature', 'signature') //↑どちらの書き方でも良い
          ->emailFormat('text')
          ->to($this->request->data['Contact']['address'])
          ->from('admin@mayer.stars.ne.jp')
          ->subject('お問い合わせありがとうございます')
          ->viewVars($content)
          ->send();
  }

  public function send(){
  }
}
?>