<?php
 require_once __DIR__.'/../../vendor/autoload.php';

 $config = \glx\Config\CachedReader::read(__DIR__.'/../config/launcher.gcml');
 $launcher = new \glx\HTTP\Launcher($config);
 $launcher->run();
