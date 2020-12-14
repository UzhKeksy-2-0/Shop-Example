<?php
namespace CH\Plugins\File;
use CH\modificators\File\FilePather\CH_FilePather;
use Symfony\Component\Filesystem\Filesystem;

class P_FilePather extends CH_FilePather
{
    public function getFiles(){
        return new Filesystem();
    }
}

