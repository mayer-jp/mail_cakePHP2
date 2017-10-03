<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>

<title><?php echo $this->fetch('title'); ?></title>
<?php
echo $this->Html->css('common');
echo $this->fetch('meta');
echo $this->fetch('css');
//echo $this->fetch('script');
?>
</head>
<body>

<div id="container">

<div id="content">

<?php echo $this->Flash->render(); ?>

<?php echo $this->fetch('content'); ?>
</div>

</div>

<div id="footer">
&copy;<?php echo date('Y'); ?> コピーライト挿入
</div>

<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
