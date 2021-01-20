<?php
// Created by FO on 20/01/2021

//get all the dependencies
require_once "../AutoLoader.php";

$controller = new \FO\Controller\HTTPController();

echo $controller->handleRequest();