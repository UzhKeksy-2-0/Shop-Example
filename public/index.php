<?php
    require_once './bootsrap.php';

    use UK\core\Application;
    use UK\basic\UK_Log;
    try {
        (new UK_Log)->log('test');
        $app = new Application();
        $app->router->setStaticRoute('','home');
        $app->run();
    } catch (Throwable $e) {
        if($e->getCode() == 404){
            echo '404 Sorry but link is not right';
            return;
        }
        $error = new UK_Log();
        $error->error($e->getMessage() . "\n Stack trace : \n" . $e->getTraceAsString());
    }catch (Exception $e) {
        $error = new UK_Log();
        $error->error($e->getMessage() . "\n Stack trace : \n" . $e->getTraceAsString());
    }catch(ErrorException $e){
        $error = new UK_Log();
        $error->error($e->getMessage() . "\n Stack trace : \n" . $e->getTraceAsString());
    }