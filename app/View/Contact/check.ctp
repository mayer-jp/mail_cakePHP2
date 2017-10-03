<?php
$result = $this->request->data['Contact'];

$message = h($result['body']);
$message = str_replace(PHP_EOL, '<br>', $message);

//print_r($result);
?>
<h1>お問い合わせ　確認画面</h1>

<table>
<tr id="name">
  <th width="25%">お名前<span class="red">*</span></th>
  <td><?php echo h($result['name']); ?></td>
</tr>
<tr id="address">
  <th>返信用メールアドレス<span class="red">*</span></th>
  <td><?php echo h($result['address']); ?></td>
</tr>
<tr id="subject">
  <th>お問い合わせの種類<span class="red">*</span></th>
  <td><?php echo h($sub_text); ?></td>
</tr>
<tr id="body">
  <th>お問い合わせ内容<span class="red">*</span></th>
  <td><?php echo $message; ?></td>
</tr>
</table>

<?php
echo $this->Form->create('Contact');

foreach ($this->request->data['Contact'] as $name => $val) {
  echo $this->Form->hidden($name, array('value' => $val));
}

echo $this->Form->button('修正する', array(
  'type' => 'submit',
  'name' => 'confirm',
  'value' => 'revise',
  'class' => array(
    'class' => 'correct',
  ),
));

echo $this->Form->button('送信する', array(
  'type' => 'submit',
  'name' => 'confirm',
  'value' => 'send',
  'class' => array(
    'class' => 'send',
  ),
));

echo $this->Form->end();
?>