<?php

namespace Framework;

class ActionResolver
{
    public function resolve($handler): callable
    {
        return \is_string($handler) ? new $handler() : $handler;
    }
}