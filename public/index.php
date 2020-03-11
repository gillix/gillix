<?php
 require_once '../vendor/autoload.php';

 $config = \glx\Config\CachedReader::read(__DIR__.'/../launcher.gcml');
 $launcher = new \glx\HTTP\Launcher($config);
 $launcher->run();
