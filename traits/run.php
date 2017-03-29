<?php
/**
 * Traits (Multiple Inheritance)
 * Traits were introduced in PHP as a mechanism for introducing Horizontal Reuse.
 */

require_once('../auto_loader.php');

$person = new Person();
$person->setName('Smijo');
$person->setAddress('Hyderabad');
$person->display();
