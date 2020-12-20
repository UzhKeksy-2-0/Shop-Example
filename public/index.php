<?php
    require_once './bootsrap.php';

use app\sds;
use CH\modificators\Log\CH_Log;
use CH\modificators\core\Application;
    try {
        $app = new Application();
        $app->router->setStaticRoute('','home');
        //var_dump(get_class_methods($app->router));
        $app->router->addVirtualController([
            'name'=>'product',
            'func'=>function($GET){
                echo 'hi';
            }
        ]);
        // $app->router->addVirtualController(['ds']);
        $app->router->setStaticRoute('error','error404');
        $app->run();
    } catch (Throwable $e) {
        if($e->getCode() == 404){
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