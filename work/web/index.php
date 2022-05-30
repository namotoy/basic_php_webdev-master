
<?php

require('../app/functions.php');
$today = date('Y-m-d H:i:s:l');

$name = 'Yusuke <script>alert(1);</script>';

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, <?= h($name);?>!</p>
  <!-- <p>Today: <?php echo date('Y-m-d H:i:s:l'); ?>
  </p> -->
  <p>Today: <?= $today; ?></p>
</body>
</html>