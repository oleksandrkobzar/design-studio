<?php
class Index {
    public static function setMessage($name, $email, $title, $text){
        $db = Db::getConnection();
        $sql = 'INSERT INTO messages (name, email, title, text)'
                . 'VALUES (:name, :email, :title, :text)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function Singup($name, $password, $email){
        $db = Db::getConnection();
        $password = md5($password);
        $access = 'user';
        $sql = 'INSERT INTO users (name, password, email, access)'
                . 'VALUES (:name, :password, :email, :access)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':access', $access, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function Login($name, $password){
        $db = Db::getConnection();
        $password = md5($password);
		$row = $db->query("SELECT name, password FROM users");
        $rows = $row->fetch();
        if($name == $rows['name'] && $password == $rows['password']) 
            return true; 
        else return false;
    }
}
?>