<?php

namespace Roman\Parser\Init;

class InitClass implements Init
{
    /*
    * @var path to folder
    * */
    private $folderpath;

    public function __construct($folderpath)
    {
        $this->folderpath = $folderpath;
    }
    /*
     * @notice create folder for xml file
     * @param string $folderpath
     * */
    public function makeUploadFolder()
    {
        $result = false;
        if (!is_dir($this->folderpath)) {
            $result = mkdir($this->folderpath);
        }

        return $result;
    }
}
