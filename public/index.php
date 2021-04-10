<?php

require_once __DIR__ . '/../vendor/autoload.php';
use HelloWorld\SayHello;


$hello = new SayHello();
echo $hello->world();
