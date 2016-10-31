<?php
require __DIR__ . '/vendor/autoload.php';

use Roman\Parser\Parser;

$class=new Parser('/var/www/dz-no3/upload/','/var/www/dz-no3/log.log');
$class->parseXML();
