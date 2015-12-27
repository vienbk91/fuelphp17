<?php
use Fuel\Core\Controller;
use Fuel\Core\Response;
use Fuel\Core\View;
use Fuel\Core\DB;
class Controller_Login extends Controller{
	public function action_index(){
		$indexView = View::forge('login/index');
		return Response::forge($indexView);
	}
	
	public function action_confirm(){
		
		$confirmView = View::forge('login/confirm');		
		// Lay du lieu tu DB
		$userData = $this->connectDB();
		
		//var_dump($userData);
		
		// So sanh username va password voi du lieu trong DB
		if (!empty($_POST['username'] && !empty($_POST['password']))){
			
			for ($i = 0 ; $i < 3 ; $i++ ){
				if ($_POST['username'] === $userData[$i]['username']){
					$confirmView->set('username' , $_POST['username']);
				}
				if ($_POST['password'] === $userData[$i]['password']){
					$confirmView->set('password' , $_POST['password']);
				}
			}
		}else{
			echo "<br>ERROR++++++++++++++++++++++++++++++++++ERROR<br>";
		}
		return Response::forge($confirmView);
	}
	
	// Ham kiem tra connect DB
	public function connectDB(){
		$userData = null;
		$query = DB::select()->from('users');
		$userData = $query->execute();
		
		return $userData;
	}
	
}