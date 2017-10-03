<h1>お問い合わせ　入力画面</h1>

<?php echo $this->Session->flash(); ?>

<?php echo $this->Form->create('Contact', array('type' => 'post', 'url' => 'index')); ?>

<table>
<tr id="name">
  <th width="25%">お名前<span class="red">*</span></th>
  <td><?php echo $this->Form->input('name' , array(
    'type' => 'text',
    'label' => false,
    'maxlength' => 255,
    'required' => true)); ?></td>
</tr>
<tr id="address">
  <th>返信用メールアドレス<span class="red">*</span></th>
  <td><?php echo $this->Form->input('address' , array(
    'type' => 'email',
    'label' => false,
    'maxlength' => 255,
    'required' => true)); ?></td>
</tr>
<tr id="subject">
  <th>お問い合わせの種類<span class="red">*</span></th>
  <td><?php echo $this->Form->input('subject', array(
    'type' => 'radio',
    'legend' => false,
    'default' => '0',
//    'required' => false,
    'options' => array(
      '0' => 'コンテンツの内容',
      '1' => '決済',
      '2' => 'ポイント',
      '3' => '広告',
      '4' => 'その他'),
    ));?></td>
</tr>
<tr id="body">
  <th>お問い合わせ内容<span class="red">*</span></th>
  <td><?php echo $this->Form->input('body' , array(
    'type' => 'textarea',
    'label' => false,
    'maxlength' => 1000,
    'required' => true)); ?></td>
</tr>
</table>

<?php echo $this->Form->button('確認する', array(
    'type' => 'submit',
    'name' => 'confirm',
    'value' => 'confirm'
));

echo $this->Form->end();
?>