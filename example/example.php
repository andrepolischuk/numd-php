<?php
  require_once(dirname('..') . '/numd.php');
  for ($i = 0; $i < 25; $i++) {
    echo Numd::decline(rand(0, 100), 'рубль', 'рубля', 'рублей') . "\n";
  }
?>
