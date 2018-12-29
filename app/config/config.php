<?php
return array(
		"siteUrl"=>"/",
		"namespaces"=>[],
		"test"=>false,
		"debug"=>false,
		"di"=>["translator"=>function(){ return new \Ubiquity\translation\Translator("fr_FR","en");}],
		"cache"=>["directory"=>"cache/","system"=>\Ubiquity\cache\system\ArrayCache::class,"params"=>[]],
		"mvcNS"=>["models"=>"models","controllers"=>"../vendor/phpbenchmarks/ubiquity-common/controllers","rest"=>"../vendor/phpbenchmarks/ubiquity-common/controllers/rest"],
		"isRest"=>true
);
