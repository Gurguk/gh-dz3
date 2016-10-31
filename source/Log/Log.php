<?php

namespace Roman\Parser\Log;

abstract class Log
{
    public function writeLog($logfile, $text)
    {
        $fp = fopen($logfile, 'rw');
        fwrite($fp, $text.PHP_EOL);
        fclose($fp);
    }
}
