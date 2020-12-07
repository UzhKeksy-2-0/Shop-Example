<?php

namespace UK;

require_once '../application/configs/path.config.php';
class UK_Log
{
    private $logPath;
    private $warningPath;
    private $errorPath;
    /**
     * Method __construct
     * 
     * @return void
     */
    public function __construct()
    {
        /* if were given more arguments call other constructoe that is named 
                as constructor with num of arguments htat was given*/
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();
        if (method_exists($this, $function = '__construct' . $numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
        $this->logPath = LOG;
        $this->warningPath = WARNING;
        $this->errorPath = ERROR;
    }
    /**
     * Method __construct3
     *
     * @param $logPath $logPath [path to file that contains ordinary logs]
     * @param $warningPath $warningPath [path to file that contains warning logs]
     * @param $errorPath $errorPath [path to file that contains error logs]
     *
     * @return void
     */
    public function __construct3($logPath, $warningPath, $errorPath)
    {
        $this->logPath = $logPath;
        $this->warningPath = $warningPath;
        $this->errorPath = $errorPath;
    }

    /**
     * Method log
     * write to (log,warning,error) file data that is in variable $text
     * @param $text $text [text that have to be added to log file]
     * @param $fileName $fileName [path to file ]
     *
     * @return void
     */
    public function log($text, $filePath = null, $dump = null)
    {
        if ($filePath == null) {
            $filePath = $this->logPath;
        }
        if (($dump == null) || ($dump == false)) {
            $text = '[' . date("y.m.d H:i:s") . '] ' . $text . "\n";
        } else {
            ob_start();
            var_dump($text);
            $text = '[' . date("y.m.d H:i:s") . '] ' . ob_get_clean() . "\n";
        }
        $data = $text . file_get_contents($filePath);
        file_put_contents($filePath, $data);
    }
    /**
     * Method warning
     * writes warning to file. If file name is not setted it will 
     * be writen to warning file by default 
     * 
     * @param $text $text [explicite description]
     * @param $filePath $filePath [explicite description]
     * @param $dump $dump [explicite description]
     *
     * @return void
     */
    public function warning($text, $filePath = null, $dump = null)
    {
        if ($filePath == null) {
            $filePath = $this->warningPath;
        }
        $this->log($text, $this->warningPath, $dump);
    }
    /**
     * Method error
     * writes error log to error file. If file name is not setted it will
     * be writen to error file by default
     * 
     * @param $text $text [explicite description]
     * @param $filePath $filePath [explicite description]
     * @param $dump $dump [explicite description]
     *
     * @return void
     */
    public function error($text, $filePath = null, $dump = null)
    {
        if ($filePath == null) {
            $filePath = $this->errorPath;
        }
        $this->log($text, $filePath, $dump);
    }
    public function setWarnings($filePath = null)
    {
        if ($filePath == null) {
            $filePath = $this->warningPath;
        }
        (new UK_Log)->log('notice');
        function myErrorHandler($errno, $errstr, $errfile, $errline, UK_Log $logs)
        {
            if ($errno == E_NOTICE) {
                $logs->warning($errstr);
            }
        }
        set_error_handler("NOTICE");
    }
}
