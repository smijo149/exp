<?php

/**
 * Created by PhpStorm.
 * User: smijo
 * Date: 29/03/17
 * Time: 09:32
 */
class DefaultClass
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}
