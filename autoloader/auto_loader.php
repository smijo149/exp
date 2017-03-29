<?php

spl_autoload_register(function ($class_name) {
    echo 'Loading : '.$class_name."\n";
    include 'src/'.$class_name.'.php';
});
