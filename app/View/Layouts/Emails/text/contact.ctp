<?php echo $this->fetch('content'); ?>
<?php echo PHP_EOL; ?>

---------------------------------------
<?php echo $_SERVER['HTTP_USER_AGENT'].PHP_EOL; ?>
<?php echo @$_SERVER['REMOTE_HOST'].'（'.$_SERVER['REMOTE_ADDR'].'）'; ?>