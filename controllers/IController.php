<?php
// Created by FO on 20/01/2021

namespace FO\Controller;

/**
 * @brief: This is the interface provided by the system, to control the formation of appropriate responses from from requests that enter the system.
 * Interface IController
 * @package Controller
 */
interface IController
{

    /**
     * @brief: handles the request and returns a response
     * @return string: The response to the request
     *
     */
    public function handleRequest(): string;
}