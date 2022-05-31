
<?php

require('../app/functions.php');

// $color = filter_input(INPUT_COOKIE, 'color') ??'transparent';

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
    <p>Hello, <?= h($name); ?>!</p>
    <p>Today: <?= $today; ?></p>

<form action="result.php" method="get">
  <input type="text" name = "message">
  <input type="text" name = "username">
  <textarea name ="message"></textarea>

  <select  name = "colors[]" multiple>
    <option value ="orange">Orange</option>
    <option value ="pink">Pink</option>
    <option value ="blue">Blue</option>
  </select>
 
  <label><input type="checkbox" name ="colors[]" value="orange">Orange</label>
  <label><input type="checkbox" name ="colors[]" value="pink">Pink</label>
  <label><input type="checkbox" name ="colors[]" value="blue">Blue</label>

  <label><input type="radio" name ="color" value="orange">Orange</label>
  <label><input type="radio" name ="color" value="pink">Pink</label>
  <label><input type="radio" name ="color" value="blue">Blue</label>


  <button>Send</button>
</form>


<?php

include('../app/_parts/_footer.php');
