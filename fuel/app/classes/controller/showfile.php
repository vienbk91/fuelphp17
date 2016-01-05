<?php
use Fuel\Core\Controller;
class Controller_Showfile extends Controller {
	public function action_index() {	
		
		// Chỉ định tên FILE
		$file = DOCROOT.'show_file.php';
		
		// Gán giá trị nội dung file
		$content = file_get_contents($file);
		
		// Hình thành đối tượng $view
		$view = View::forge('showfile');
		
		// Set title cho View
		$view->set('title' , 'Show File');
		// Set content cho View
		$view->set('content' , $content);
		
		// Trả về đối tượng $view
		return $view;
	}
}