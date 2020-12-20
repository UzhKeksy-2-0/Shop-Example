<?php
    define("ROOT", dirname($_SERVER['DOCUMENT_ROOT']).'/');
    
    // folders
    const APPLICATION = ROOT . 'application/';
    const MEDIA = ROOT . 'media/';
    const PUBLIC_ = ROOT . 'public/';
    const VENDOR = ROOT .'vendor/';
    const STYLES = ROOT . 'styles/';
    const VIEWS = APPLICATION . 'views/';
    const CONFIGS = APPLICATION . 'configs/';
    const CONTROLLERS = APPLICATION .  'controllers/';
    const CORE = APPLICATION . 'core/';
    const TEMPLATES_FOR_COACH = CORE .'templatesCoach/';
    const MODELS = APPLICATION . 'models/';
    const LOGS = APPLICATION . 'logs/';
    const HELPERS = APPLICATION . 'helpers/';
    const LANGUAGES = APPLICATION . 'languages/';

    const BOOTSTRAP = ROOT . '';
    const AUTOLOAD = VENDOR . 'autoload.php';
    // logs
    const ERROR = LOGS . 'error.log';
    const LOG = LOGS . 'log.log';
    const WARNING = LOGS . 'warning.log';

    // configs
    const DB_CONFG = CONFIGS .  'database.config.php';

    //
    const COACH_VIEW_TEMPLATE = 'view';
    const COACH_CONTROLLER_TEMPLATE = 'controller';
    const COACH_MODEL_TEMPLATE = 'model';


