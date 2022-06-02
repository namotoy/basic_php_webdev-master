
<?php

require('../app/functions.php');

// $color = filter_input(INPUT_COOKIE, 'color') ??'transparent';

$filename = '../app/messages.txt';
$messages = file($filename, FILE_IGNORE_NEW_LINES);

include('../app/_parts/_header.php');

// $today = date('Y-m-d H:i:s:l');
// $names =[
//   'Yusuke','Taro','Hanako',
// ];
?>

<ul>
  <?php foreach($messages as $message): ?>
    <li><?= h($message); ?></li>
    <?php endforeach; ?>
</ul>

<!-- <ul>
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
    <p>Today: <?= $today; ?></p> -->

<form action="result.php" method="post">
  <input type="text" name="message">
<!-- <form action="result.php" method="get"> -->
  <!-- <input type="text" name = "message">
  <input type="text" name = "username">
  <textarea name ="message"></textarea> -->

  <!-- <select  name = "colors[]" multiple>
    <option value ="orange">Orange</option>
    <option value ="pink">Pink</option>
    <option value ="blue">Blue</option>
  </select> -->
 
  <!-- <label><input type="checkbox" name ="colors[]" value="orange">Orange</label>
  <label><input type="checkbox" name ="colors[]" value="pink">Pink</label>
  <label><input type="checkbox" name ="colors[]" value="blue">Blue</label> -->

  <!-- <label><input type="radio" name ="color" value="orange">Orange</label>
  <label><input type="radio" name ="color" value="pink">Pink</label>
  <label><input type="radio" name ="color" value="blue">Blue</label> -->

  <button>Post</button>
  <!-- <a href="reset.php">[reset]</a> -->
</form>


<?php

include('../app/_parts/_footer.php');
