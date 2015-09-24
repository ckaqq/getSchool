<?php

require_once __DIR__ . '/autoload.php';

use Locate\Xiaomai;
use Locate\Own;

// 利用小麦公社
$result = Xiaomai::getSchool('27.912971', '112.919732');
var_dump($result);

// 自己算
$result = Own::getSchool('27.912971', '112.919732');
var_dump($result);