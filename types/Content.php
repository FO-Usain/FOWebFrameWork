<?php
// Created by FO on 20/01/2021

namespace FO\Type;

/**
 * Class Content: The subject-object being managed by the system. While in the system, during runtime, those data are wrapped around by Content, for easy management
 * @package Type
 */
class Content {

    public array $attributes;
    public array $childContents;        //an array of Contents, which are components of this Content
}