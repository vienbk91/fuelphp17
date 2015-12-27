<?php
use Fuel\Core\Controller;
use Fuel\Core\Response;
use Fuel\Core\View;
class Controller_Blog extends Controller {
	public function action_index(){
		echo "Action Index";
		$indexView = View::forge('blog/index');
		
		// Lay du lieu
		$postData = $this->connectDB();
		$indexView->set('postData' , $postData);
		
		
		return Response::forge($indexView);
	}
	
	public function action_add(){
		echo "Action add blog";
		$addView = View::forge('blog/add');
		
		return Response::forge($addView);
	}
	
	public function action_update(){
		echo "Action update Blog";
		$updateView = View::forge('blog/update');
		
		return Response::forge($updateView);
		
	}
	
	
	public function connectDB(){
		$userData = null;
		$query = DB::select()->from('posts');
		$userData = $query->execute();
		
		return $userData;
	}
	
	
}