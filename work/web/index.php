
<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

$today = date('Y-m-d H:i:s:l');
$names =[
  'Yusuke','Taro','Hanako',
];
?>
<form action="result.php" method="get">
  <input type="text" name = "message">
  <input type="text" name = "username">
  <textarea name ="message"></textarea>
  <select  name = "colors[]" multiple>
    <option value ="orange">Orange</option>
    <option value ="pink">Pink</option>
    <option value ="blue">Blue</option>
  </select>
  <button>Send</button>
</form>

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
