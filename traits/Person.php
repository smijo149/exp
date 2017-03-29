<?php

class Person
{
    use Name, Address;

    public function display()
    {
        echo "I am a person. \n";
        echo "Name: ".$this->getAddress()."\n";
        echo "Address: ".$this->getAddress()."\n";
    }
}
