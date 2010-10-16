<?php
	$title = "{$error['class']}::{$error['method']}()";
	$file = realpath($error['file']);
	$line = intval($error['line']);
	$url = "txmt://open?url=file://{$file}&line={$line}";
?>

<div class="test-assert test-assert-failed">
	Assertion '<?php echo $error['assertion'] ?>' failed in
	<a href="<?php echo $url; ?>"><?php echo $title; ?> on line <?php echo $line ?></a>:
	<span class="content"><?php echo $error['message'] ?></span>
</div>
