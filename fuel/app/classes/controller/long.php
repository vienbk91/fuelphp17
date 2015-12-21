<?php
use Fuel\Core\Controller;
use Fuel\Core\Session;
use Fuel\Core\View;
use Fuel\Core\Input;
use Fuel\Core\Response;
class Controller_Long extends Controller {
	public  function __construct() {
		Session::_init();
	}
	
	function action_index() {
		$view = View::forge('long/index');
		
		if (Input::get('submit')) {
			
		}
		
		
		
		
		Return Response::forge($view);
	}
	
	function action_confirm() {
		
	}
	
	function action_thanks() {
		
	}
	
	
}