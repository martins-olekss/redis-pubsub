<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new Predis\Client();
$client->pubSubLoop(['subscribe' => 'main-channel'], function ($l, $msg) {
    if ($msg->payload === 'unsub') {
        return false;
    } else {
        echo "$msg->payload on $msg->channel", PHP_EOL;
    }
});
