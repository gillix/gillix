<?php
 require_once '../../vendor/autoload.php';
 
 $launcher = new \glx\HTTP\Launcher(__DIR__.'/../config/launcher-dev.gcml');
 $launcher->run();
