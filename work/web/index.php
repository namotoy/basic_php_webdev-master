
<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

$today = date('Y-m-d H:i:s:l');
$names =[
  'Yusuke','Taro','Hanako',
];
?>


  <ul>
    <?php if (empty($names)):?>
      <li>Nobody!</li>
      <?php else: ?>
        <?php foreach ($names as $name):?>
          <li><?= h($name); ?>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>

  </ul>
  <p>Hello, <?= h($name);?>!</p>
  <!-- <p>Today: <?php echo date('Y-m-d H:i:s:l'); ?>
  </p> -->
  <p>Today: <?= $today; ?></p>

<?php

include('../app/_parts/_footer.php');
