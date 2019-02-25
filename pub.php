<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new Predis\Client();
$client->publish('main-channel','Hello World');