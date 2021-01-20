<?php
// Created by FO on 20/01/2021

//enumerate all the dependencies
$dependencies = [
    "helpers",

    //The ErrorCategories
    "errorCategories/IErrorCategory",

    "ErrorCode",

    "Error",

    //The Controllers
    "controllers/IController",
    "controllers/HTTPController",

    //The factories
    "factories/ErrorCategoryCreator",
];

//require all the files of the dependencies, once
foreach ($dependencies as $dependency) {
    require_once __DIR__ . "/$dependency" . ".php";
}