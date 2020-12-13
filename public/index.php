<?php
    require_once './bootsrap.php';

use CH\basic\BC_Config;
use CH\modificators\CH_Log;
use CH\modificators\core\Application;
    try {
        $app = new Application();
      //  BC_Config::getConfigFromFile('/home/david/Sync/it-step/Php_and_Sql/Exam/application/configs/site.config.php');
//        (new CH_Log)->log(TEST,null,true);
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