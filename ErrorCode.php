<?php
//Created by FO on 20/01/2021

namespace FO;

/**
 * Class ErrorCode. Represents errors using integers and can retrieve the description of those errors from the ErrorCategories they belong to
 */
class ErrorCode
{
    private int $value;     //The  numeric value of this ErrorCode
    private \FO\ErrorCategory\IErrorCategory $category;

    /**
     * ErrorCode constructor.
     * @param int $value
     * @param \FO\ErrorCategory\IErrorCategory $category
     */
    public function __construct(int $value, ErrorCategory\IErrorCategory $category)
    {
        //initialize the properties of this ErrorCode
        $this->value = $value;
        $this->category = $category;
    }

    /**
     * @brief: Returns the numeric value of this ErrorCode
     * @return int: The integral value of this ErrorCode
     */
    public function value(): int
    {
        //return the value of the ErrorCode
        return $this->value;
    }

    /**
     * @brief: gets the message that maps to this ErrorCode's value, as defined by its Category($this->Category)
     * @return string
     */
    public function message(): string
    {
        //retrieve the message from the category
        return $this->category->message($this->value);
    }
}