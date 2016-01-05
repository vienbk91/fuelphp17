<?php
use Fuel\Core\Controller_Template;
use Fuel\Core\View;
Class Controller_Form extends Controller_Template {
	public function action_index() {
		// Todo 
		
		$this->template->title = 'コンタクトフォーム';
		$this->template->content = View::forge('form/index');
		
	}
	
	public function action_confirm() {
		// Todo 
	}
	
	public function action_send() {
		// Todo 
	}
	
	
}