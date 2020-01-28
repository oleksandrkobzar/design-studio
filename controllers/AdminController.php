<?php

include_once ROOT. '/models/Admin.php';

class AdminController{

	function __construct() {
        if(!isset($_SESSION['access'])){
			header("Location:".SRCPATH."/index");
			exit();
		}
	}
	
	public function actionIndex(){

		require_once(ROOT . '/views/admin.php');
		return true;
	}

	public function actionUser(){
		$users = Admin::getUsers();
		require_once(ROOT . '/views/user.php');
		return true;
	}

	public function actionMessage(){
		$messages = Admin::getMessages();
		require_once(ROOT . '/views/message.php');
		return true;
	}
	
    public function actionLogout(){
		unset($_SESSION['access']);
		header("Location:".SRCPATH."/index");
		exit();

	}
}
?>