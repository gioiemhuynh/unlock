<?php
use Tlait\Unlock\Application;
use Tlait\Unlock\Controller\HomeController;
use Tlait\Unlock\Controller\NotFoundController;

require_once "vendor/autoload.php";
$application = new Application(
    new HomeController(),
    new NotFoundController()
);

$application->start();
echo '<a href="src/testTraits.php">Example traits<a>';
