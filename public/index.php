<?php
    require_once './bootsrap.php';

use CH\modificators\Log\CH_Log;
use CH\modificators\core\Application;
    try {
        $app = new Application();
        $app->router->setStaticRoute('','home');
        $app->router->setStaticRoute('error','error404');
        $app->run();
    } catch (Throwable $e) {
        if($e->getCode() == 404){
            //echo '404 Sorry but link is not right';
            header('Location: http://localhost:8080/error');
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