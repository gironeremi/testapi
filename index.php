<?php
require_once './vendor/restler.php';
use Luracast\Restler\Restler;

error_reporting(E_ERROR | E_PARSE);

$r = new Restler();
$r->addAPIClass('Luracast\\Restler\\Resources'); //this creates resources.json at API Root
$r->addAPIClass('Say');
$r->addAPIClass('Animals');
$r->addAPIClass('BMI');
$r->addAPIClass('Currency');
$r->addAPIClass('Simple', '');
$r->addAPIClass('Secured');
$r->addAPIClass('Authors');
$r->addAPIClass('Session');
$r->addAuthenticationClass('SimpleAuth');
$r->handle(); //serve the response