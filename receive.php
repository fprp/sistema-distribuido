<?php
 
require_once __DIR__ . '/vendor/autoload.php';
 
use PhpAmqpLib\Connection\AMQPStreamConnection;
 
 
/**
 * Inicia a conexão
 */
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection-&gt;channel();
 
/**
 * Declara qual a fila que será usada
 */
$channel-&gt;queue_declare('hello', false, false, false, false);
 
echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";
 
/**
 * Função que vai receber e tratar efetivamente a mensagem
 */
$callback = function($msg) {
  echo " [x] Received ", $msg-&gt;body, "\n";
};
 
/**
 * Adiciona esse "callback" para a fila 
 */
$channel-&gt;basic_consume('hello', '', false, true, false, false, $callback);
 
/**
 * Mantem a função escutando a fila por tempo indeterminado, até que seja encerrada
 */
while(count($channel-&gt;callbacks)) {
    $channel-&gt;wait();
}
 
$channel-&gt;close();
$connection-&gt;close();
?>