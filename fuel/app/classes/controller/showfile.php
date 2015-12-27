<?php
use Fuel\Core\Controller;
class Controller_Showfile extends Controller {
	public function action_index() {	
		$file = DOCROOT.'show_file.php';
		$content = file_get_contents($file);
		
		$view = View::forge('showfile/index');
		
		$view->set('title' , 'Show File');
		$view->set('content' , $content);
		
		return $view;
	}
}