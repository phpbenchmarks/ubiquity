<?php
use Ubiquity\cache\CacheManager;
use Ubiquity\controllers\Router;
use Ubiquity\events\EventsManager;

CacheManager::startProd($config);
EventsManager::start();
Router::startRest();
