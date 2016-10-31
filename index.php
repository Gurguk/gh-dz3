<?php
require __DIR__ . '/vendor/autoload.php';

use Roman\Parser\Parser;

$class=new Parser('/var/www/dz-3/upload/','/var/www/dz-3/log.log');
$class->parseXML();
