<?php

namespace Roman\Parser;

use Roman\Parser\Init\InitClass as Init;
use Roman\Parser\Log\Log as Log;

class Parser extends Log
{
    use ExampleTrait;

    public $logfile;
    public $folderpath;

    public function __construct($folderpath, $logfile)
    {
        $this->logfile = $logfile;
        $this->folderpath = $folderpath;
        $init = new Init($folderpath);
        $mkd = $init->makeUploadFolder();
        if (!$mkd) {
            $this->writeLog('Error!!!');
        }
    }

    public function writeLog($text)
    {
        parent::writeLog($this->logfile, $text);
    }

    private function getPostData()
    {
        $this->uploadFile();
    }

    private function startParse()
    {
        $xml = simplexml_load_file($this->folderpath.'/xml.xml');
        $this->finishParse($xml);
    }

    private function finishParse($xml)
    {
        var_dump($xml);
    }

    public function parseXML()
    {
        $this->getPostData();
        $this->startParse();
    }
}
