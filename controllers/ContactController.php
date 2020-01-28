<?php

include_once ROOT. '/models/Contact.php';

class ContactController{

	public function actionContact(){
		if(isset($_POST['send-message'])){
			$result = Contact::setMessage($_POST['name'], 
										$_POST['email'],
										$_POST['title'], 
										$_POST['text']);
		}

		require_once(ROOT . '/views/contact.php');
		return true;
    }
    
}
?>