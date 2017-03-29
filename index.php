<?php
require_once('auto_loader.php');

$defaultClass = new DefaultClass('Smijo');
$name = $defaultClass->getName();
echo $name."\n";
