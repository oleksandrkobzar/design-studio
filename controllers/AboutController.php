<?php

class AboutController{

	public function actionAbout(){
		require_once(ROOT . '/views/about.php');
		return true;
    }
    
}
?>