<?php
use CH\modificators\FileWorker\CH_FileWorker;

class P_FileWorker extends CH_FileWorker
{
    use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
    use Symfony\Component\Filesystem\Filesystem;    
}

