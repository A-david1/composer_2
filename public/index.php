<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\WCS;


$hello = new WCS\Hello();
echo $hello->talk();
