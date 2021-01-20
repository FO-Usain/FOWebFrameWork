<?php
// Created by FO on 20/01/2021

namespace FO\RequestHandler;

use FO\ErrorCode;

/**
 * Interface IRequestHandler: responsible for handling a specific type of request and.
 * Since the variables that package the requests(e.g. $_POST, $_GET) are super globals, no need for passing the request itself as an argument
 * @package FO\RequestHandler
 */
interface IRequestHandler {

    /**
     * @param string $type: The type of the request to be handled
     * @param $URI: The URI of the request(the target-file of the request XD)
     * @param \FO\Type\Content $result: Content retrieved by this IRequestHandler, while handling the request
     * @return ErrorCode: describes the success-status of the request handling
     */
    public function handleRequest(string $type, $URI, \FO\Type\Content &$result) : ErrorCode;

    /**
     * @brief: validates a request and returns an ErrorCode to that describes the validity of that request
     * @return ErrorCode: Describes the validity of the ErrorCode
     */
    public function validateRequest() : ErrorCode;
}