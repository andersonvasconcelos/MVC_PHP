<?php 
require_once 'environment.php';

$conf = array();
global $db;

if (ENVIRONMENT == '') {
	$conf['dbname'] = "";
	$conf['host'] = "";
	$conf['user'] = "";
	$conf['pass'] = "";
}else{
	$conf['dbname'] = "";
	$conf['host'] = "";
	$conf['user'] = "";
	$conf['pass'] = "";
}

try {
	$db = new PDO('mysql:dbname='.$conf['dbname'].';host='.$conf['host'], $conf['user'], $conf['pass']);
} catch (PDOException $e) {
	echo "ERRO no banco: ".$e->getMessage();
}