<?php
// Created by fo on 20/01/2021
//
// This file contains the definition of factory function for ErrorCategory

namespace FO\Factory;

if (!function_exists("createErrorCategory")) {      //The function does not exist

    /**
     * @brief a IErrorCategory, depending on the name of the category(passed as the name)
     * @param string $name: The name of the ErrorCategory to create
     */
    function createErrorCategory(string $name) {
        switch ($name) {
            default:
                //return null because there is not ErrorCategory in the system that has its name to be the value of $name
                return null;
        }
    }
}