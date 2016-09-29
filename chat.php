<?php
require(dirname(__FILE__).'/vendor/autoload.php');

$pusher = new Pusher('235524ad737c76994c6b', '8b73ab58ac05744b399a', '253761');

$mensagem = $_POST['mensagem'];

$pusher->trigger('chat-usuarios', 'novaMensagem', ['mensagem' => $mensagem]);