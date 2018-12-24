<?php
namespace controllers;
 /**
 * Controller Main
 **/
class Main extends ControllerBase{

	public function index(){
	$this->loadView("@framework/index/index.html");
}

}
