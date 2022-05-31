<?php

require('../app/functions.php');

$message = trim(filter_input(INPUT_GET, 'message'));
$message = $message !== '' ? $message : '...';
$username = filter_input(INPUT_GET, 'username');
$colors = filter_input(INPUT_GET, 'colors', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
$colors = empty($colors) ? 'None selected' : implode(',', $colors);

// $color = filter_input(INPUT_GET, 'color');
// $color = isset($color) ? $color : 'None selected';
// $color = $color ?? 'None selected';  //上記と同じ意味
$color = filter_input(INPUT_GET, 'color') ?? 'None selected';

include('../app/_parts/_header.php');
?>

<p><?= h($colors); ?></p>
<p><?= h($color); ?></p>
<p><?= nl2br(h($message)); ?> by <?= h($username); ?></p>
<p><a href="index.php">Go back</a></p>

<?php
include('../app/_parts/_footer.php');
