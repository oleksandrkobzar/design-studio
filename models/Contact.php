<?php
class Contact {
    public function setMessage($name, $email, $title, $text){
        $db = Db::getConnection();
        $sql = 'INSERT INTO messages (name, email, title, text) '
                . 'VALUES (:name, :email, :title, :text)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        return $result->execute();
    }
}
?>