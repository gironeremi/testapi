<?php
require_once './vendor/restler.php';
use Luracast\Restler\Restler;

error_reporting(E_ERROR | E_PARSE);

$r = new Restler();
$r->addAPIClass('Say');
$r->addAPIClass('Animals');
$r->handle(); //serve the response