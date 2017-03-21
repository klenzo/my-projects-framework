<?php
    define('ROOT', dirname(dirname(__DIR__)));
    define('APP_DIR', dirname(__DIR__));
        define('CLASS_DIR', APP_DIR .'/class');
        define('CONFIGS_DIR', APP_DIR .'/configs');
        define('CONTROLLERS_DIR', APP_DIR .'/controllers');
        define('LANGS_DIR', APP_DIR .'/langs');
        define('MODELS_DIR', APP_DIR .'/models');
        define('VIEWS_DIR', APP_DIR .'/views');
            define('INC_DIR', VIEWS_DIR .'/inc');

    define('APP_PUBLIC', ROOT .'/public');
        define('ASSETS_DIR', APP_PUBLIC .'/assets');
        define('UPLOADS_DIR', APP_PUBLIC .'/uploads');
