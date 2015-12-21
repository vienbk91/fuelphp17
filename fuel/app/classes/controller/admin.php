<?php
use Fuel\Core\Controller;
use Fuel\Core\Response;
use Fuel\Core\View;
class Controller_Admin extends Controller {
	public function action_index() {
		// Todo
		$indexView = View::forge ( 'admin/index' );
		$indexView->set ( "name", "Chu Quang Vien" );
		$indexView->set ( "email", "vienbk91@gmail.com" );
		
		return Response::forge ( $indexView );
	}
	public function action_edit() {
		return Response::forge ( View::forge ( 'admin/edit' ) );
	}
	public function action_show() {
		return Response::forge ( View::forge ( 'admin/show' ) );
	}
	public function action_connectdb() {
		
		$connectDB = View::forge ( 'admin/connectdb' );
		
		$viewData = null;
		$query = DB::select ()->from ( 'users' );
		$viewData = $query->execute ();
		
		//$connectDB->set("userData" , $viewData["result"]);
		
		//return Response::forge ( $connectDB );
		
		var_dump(  $viewData );
		die ();
	}
}