<?php
require(dirname(__FILE__).'/vendor/autoload.php');

$pusher = new Pusher('API_KEY', 'APP_SECRET', 'APP_ID');

$mensagem = $_POST['mensagem'];

$pusher->trigger('chat-usuarios', 'novaMensagem', ['mensagem' => $mensagem]);