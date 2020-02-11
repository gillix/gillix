<?php
 require_once '../../framework/vendor/autoload.php';
 
 $launcher = new \glx\HTTP\Launcher(__DIR__.'/../launcher-dev.gcml');
 $launcher->run();
