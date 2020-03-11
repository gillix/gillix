<?php
 $workDir = __DIR__.'/..';
 chdir($workDir);
 
 require_once $workDir.'/../vendor/autoload.php';

 $config = \glx\Config\CachedReader::read(__DIR__.'/../config/launcher.gcml');
 $launcher = new \glx\HTTP\Launcher($config);
 $launcher->run();
