#!/usr/bin/env php
<?php
require_once('./echoServer.php');

$echo->stdout('wwwwwwwwwwwwwwwww');
try {
  $echo->run();
  $echo->stdout($echo->$users);
}
catch (Exception $e) {
  $echo->stdout($e->getMessage());
}
