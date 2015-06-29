<?php


$cfg = array(
    'driver'    => 'mysqli',
    'host'      => '127.0.0.1:3306',
    'username'  => 'root',
    'password'  => '',
    'database'  => '',
    'charset'   => 'utf8',
);


$mysqli = new mysqli($cfg['host'], $cfg['username'], $cfg['password']);


if($mysqli -> connect_errno){
    exit('Connect failed: ' . $mysqli -> connect_error);
}

echo 'client_info: ', $mysqli -> client_info, PHP_EOL;
echo '-------------', PHP_EOL;

echo 'server_info: ', $mysqli -> server_info, PHP_EOL;
echo '-------------', PHP_EOL;

echo 'server_version: ', $mysqli -> server_version, PHP_EOL;
echo '-------------', PHP_EOL;

echo 'client_version: ', $mysqli -> client_version, PHP_EOL;
echo '-------------', PHP_EOL;


echo 'protocol_version: ', $mysqli -> protocol_version, PHP_EOL;
echo '-------------', PHP_EOL;





$mysqli -> close();



exit;


