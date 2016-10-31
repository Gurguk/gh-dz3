<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 31.10.16
 * Time: 1:15.
 */

namespace Roman\Parser;

trait ExampleTrait
{
    private function uploadFile()
    {
        move_uploaded_file($_FILES['userfile']['tmp_name'], $this->folderpath.'/xml.xml');
    }
}
