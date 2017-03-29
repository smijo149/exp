<?php

class ExampleClass
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function displayName()
    {
        echo $this->name;
    }
}
