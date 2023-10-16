<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$elie = new Cow('Hello, Farm!');

$elie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');

echo $elie;

