<?php
// Created by FO on 20/01/2021

namespace FO\ErrorCategory;

/**
 * Interface IErrorCategory: an interface that defines the category an error belongs to. It supplies the messages that corresponds to the 'value' attributes of the ErrorCodes that belong it
 * @package ErrorCategory
 */
interface IErrorCategory {

    /**
     * @brief: returns the error-message that this ErrorCategory has mapped to the passed argument(the 'value' member-data of an ErrorCode)
     * @param int $value: The value of an ErrorCode
     * @return string: The error-message that corresponds to the passed $value
     */
    public function message(int $value) : string;

    /**
     * @return string: The name of this IErrorCategory
     */
    public function name() : string;
}