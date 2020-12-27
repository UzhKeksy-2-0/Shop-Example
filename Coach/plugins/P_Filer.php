<?php
namespace CH\plugins;

use CH\basic\Plugin;
use CH\modificators\File\FilePather\CH_FilePather;
use CH\modificators\File\FileWorker\FileWorker;
use Symfony\Component\Finder\Finder;

class P_Filer extends Plugin
{
    public FileWorker $fileWorker;
    public CH_FilePather $filePather;
    public Finder $finder;
    public function __construct()
    {
        $this->fileWorker = new FileWorker();
        $this->filePather = new CH_FilePather();
        $this->finder = new Finder();
    }
}