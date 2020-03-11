<?php
 $workDir = __DIR__.'/..';
 chdir($workDir);
 
 require_once $workDir.'/../vendor/autoload.php';
 
 $launcher = new \glx\HTTP\Launcher(__DIR__.'/../config/launcher-dev.gcml');
 $launcher->run();
