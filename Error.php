<?php
//Created by FO on 20/01/2021

namespace FO;

/**
 * Class Error: a custom throwable that enables interaction with the System-defined ErrorCode(check ErrorCode.php)
 * @package FO\Error
 */
class Error implements \Throwable {
    private \FO\ErrorCode $errorCode;       //The errorCode that contains the details of the error

    /**
     * Error constructor.
     * @param \FO\ErrorCode $errorCode
     */
    final public function __construct(\FO\ErrorCode $errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @brief: returns the description of this error, by delegating the message retrieval to the this Error's ErrorCode
     * @return string: The description of the error
     */
    final public function getMessage() {
        return $this->errorCode->message();
    }

    /**
     * @brief: returns the ErrorCode of this Error
     * @return \FO\ErrorCode|int: The ErrorCode of this Error
     */
    final public function getCode() {
        return $this->errorCode;
    }

    final public function getFile() {}

    final public function getLine() {}

    final public function getTrace() {}

    final public function getTraceAsString() {}

    final public function getPrevious() {}

    final public function __toString() {}
}