<?php
    require_once './bootsrap.php';

use CH\modificators\Log\CH_Log;
use CH\modificators\core\Application;
    try {
        $app = new Application();
        $app->router->setStaticRoute('','home');
        $app->run();
    } catch (Throwable $e) {
        if($e->getCode() == 404){
            echo '404 Sorry but link is not right';
            return;
        }
        $error = new CH_Log();
        $error->error($e->getMessage() . "\n Stack trace : \n" . $e->getTraceAsString());
    }catch (Exception $e) {
        $error = new CH_Log();
        $error->error($e->getMessage() . "\n Stack trace : \n" . $e->getTraceAsString());
    }catch(ErrorException $e){
        $error = new CH_Log();
        $error->error($e->getMessage() . "\n Stack trace : \n" . $e->getTraceAsString());
    }