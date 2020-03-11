<?php
 require_once __DIR__.'/../../vendor/autoload.php';
 
 $launcher = new \glx\HTTP\Launcher(__DIR__.'/../config/launcher-dev.gcml');
 $launcher->run();
