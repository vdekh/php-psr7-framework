<?php
/**
 * Created by PhpStorm.
 * User: Orest
 * Date: 21.01.2018
 * Time: 13:57
 */

namespace Framework\Http\Pipeline;


class UnknownMiddlewareTypeException extends \InvalidArgumentException
{
    private $type;

    public function __construct($type)
    {
        parent::__construct('Unknown middleware type');
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}