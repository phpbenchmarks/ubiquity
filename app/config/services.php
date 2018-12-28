<?php
use Ubiquity\cache\CacheManager;
use Ubiquity\controllers\Router;

CacheManager::startProd($config);
Router::start();
Router::addRoute("_default", "controllers\Main");
