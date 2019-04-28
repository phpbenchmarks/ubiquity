<?php
Ubiquity\cache\CacheManager::startProd($config);
Ubiquity\events\EventsManager::start();
Ubiquity\translation\TranslatorManager::start('fr_FR','en');
Ubiquity\controllers\Router::startRest();
