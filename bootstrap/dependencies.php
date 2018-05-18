<?php
/**
 * Created by PhpStorm.
 * User: PXP DIGITAL
 * Date: 18/05/2018
 * Time: 13:02
 */

$injector = new \Auryn\Injector;


$signer = new Kunststube\CSRFP\SignatureGenerator(getenv('CSRF_SECRET'));
$injector->share($signer);

$blade = new \duncan3dc\Laravel\BladeInstance(getenv('VIEWS_DIRECTORY'), getenv('CACHE_DIRECTORY'));
$injector->share($blade);

$injector->make("Acme\http\Request");
$injector->make("Acme\http\Response");
$injector->make("Acme\http\Session");

$injector->share("Acme\http\Request");
$injector->share("Acme\http\Response");
$injector->share("Acme\http\Session");

return $injector;

