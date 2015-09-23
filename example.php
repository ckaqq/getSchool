<?php

require_once __DIR__ . '/Autoload.php';

use Locate\Xiaomai;

// 利用小麦公社
$result = Xiaomai::getSchool("27.902252", "112.921631");
var_dump($result);
