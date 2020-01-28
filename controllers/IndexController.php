<?php

include_once ROOT. '/models/Index.php';

class IndexController {

	public function actionIndex() {
		if(isset($_POST['send-message'])) {
			$result = Index::setMessage($_POST['name'], 
										$_POST['email'],
										$_POST['title'], 
										$_POST['text']);
		}
		
		require_once(ROOT . '/views/index.php');
		return true;
	}
	
	public function actionLogin() {
		if(isset($_SESSION['access'])){
			header("Location:".SRCPATH."/admin");
			exit();
		}
		
		if(isset($_POST['login'])) {
			$result = Index::Login($_POST['name'], $_POST['password']);

			if($result) {
				$_SESSION['res'] = "Welcome to admin panel";
				$_SESSION['error'] = "0";
				$_SESSION['access'] = "admin"; 
				header("Location:".SRCPATH."/admin");
				exit();
			} 
			else {
				$_SESSION['res'] = "Failed to log in. The name or password is incorrect";
				$_SESSION['error'] = "1";
				header("Location:".SRCPATH."/login");
				exit();
			}
		}

		if(isset($_POST['singup'])){
			$result = Index::Singup($_POST['name'], $_POST['password'], $_POST['email']);
		}
		
		require_once(ROOT . '/views/login.php');
		return true;
    }
    
}
?>