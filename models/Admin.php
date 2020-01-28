<?php
class Admin {

    public static function getUsers() {
        $db = Db::getConnection();
		$array = array();
		$result = $db->query("SELECT * FROM users");

		$i = 0;
		while($row = $result->fetch()) {
			$array[$i]['id'] = $row['id'];
			$array[$i]['name'] = $row['name'];
			$array[$i]['password'] = $row['password'];
            $array[$i]['email'] = $row['email'];
            $array[$i]['access'] = $row['access'];
			$i++;
		}
		return $array;
    }

    public static function getMessages() {
        $db = Db::getConnection();
		$array = array();
		$result = $db->query("SELECT * FROM messages");

		$i = 0;
		while($row = $result->fetch()) {
			$array[$i]['id'] = $row['id'];
			$array[$i]['name'] = $row['name'];
			$array[$i]['email'] = $row['email'];
            $array[$i]['title'] = $row['title'];
            $array[$i]['text'] = $row['text'];
			$i++;
		}
		return $array;
    }

}
?>