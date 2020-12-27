<?php
namespace app;

use CH\basic\Plugin;
use CH\modificators\File\FilePather\CH_FilePather;
use CH\modificators\File\FileWorker\FileWorker;
class Test 
{
    public function mkdir()
    {
        echo 'puk';
    }
}
class Pluginator extends Plugin
{
    public FileWorker $file;
    public CH_FilePather $filePath;
    public Test $test;
    public function __construct()
    {
        $this->file = new FileWorker();
        $this->filePath = new CH_FilePather();
        $this->test = new Test();
    }
}