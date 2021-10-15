<?php

require '../vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
$bessie->setTongue('U');
echo $output;

// or just echo the object for direct output
echo $bessie;