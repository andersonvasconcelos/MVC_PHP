<?php 
session_start();

require_once __DIR__.'/vendor/autoload.php';
require_once 'config/dbConfig.php';

$i = new \Core\Core();
$i->start();