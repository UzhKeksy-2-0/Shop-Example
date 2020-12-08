<?php

use UK\modificators\UK_Log;

require_once '../application/configs/path.config.php';
error_reporting(E_ALL);
ini_set("display_errors", "off");
/**
 * Custom error handler
 * @param integer $code
 * @param string $description
 * @param string $file
 * @param interger $line
 * @param mixed $context
 * @return boolean
 */
function handleError($code, $description, $file = null, $line = null, $context = null)
{
    $displayErrors = ini_get("display_errors");
    $displayErrors = strtolower($displayErrors);
    if (error_reporting() === 0 || $displayErrors === "on") {
        return false;
    }
    list($error, $log) = mapErrorCode($code);
    $data =  $error . ' (' . $code . '): ' . $description . ' in [' . $file . ' on line ' . $line . ']';

    return (new UK_Log)->warning($data);
}

/**
 * Map an error code into an Error word, and log location.
 *
 * @param int $code Error code to map
 * @return array Array of error word, and log location.
 */
function mapErrorCode($code)
{
    $error = $log = null;
    switch ($code) {
        case E_PARSE:
        case E_ERROR:
        case E_CORE_ERROR:
        case E_COMPILE_ERROR:
        case E_USER_ERROR:
            $error = 'Fatal Error';
            $log = LOG_ERR;
            break;
        case E_WARNING:
        case E_USER_WARNING:
        case E_COMPILE_WARNING:
        case E_RECOVERABLE_ERROR:
            $error = 'Warning';
            $log = LOG_WARNING;
            break;
        case E_NOTICE:
        case E_USER_NOTICE:
            $error = 'Notice';
            $log = LOG_NOTICE;
            break;
        case E_STRICT:
            $error = 'Strict';
            $log = LOG_NOTICE;
            break;
        case E_DEPRECATED:
        case E_USER_DEPRECATED:
            $error = 'Deprecated';
            $log = LOG_NOTICE;
            break;
        default:
            break;
    }
    return array($error, $log);
}
set_error_handler("handleError");
require_once AUTOLOAD;
require_once DB_CONFG;
