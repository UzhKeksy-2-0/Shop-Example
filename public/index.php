<?php
    require_once './bootsrap.php';

    use UK\core\Application;
    use UK\UK_Log;
    $d  = new MysqliDb();
    try {
        $app = new Application();
        $app->router->setStaticRoute('','test');
        $app->run();
    } catch (Throwable $e) {
        if($e->getCode() == 404){
            echo '404 Sorry but link is not right';
            return;
        }
        $error = new UK_Log();
        $error->error($e->getMessage() . "\n Stack trace : " . $e->getTraceAsString());
    }catch (Exception $e) {
        $error = new UK_Log();
        $error->error($e->getMessage() . "\n Stack trace : " . $e->getTraceAsString());
    }