<?php
class Request{
    
    public static function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}
    
function examp($password1, $password2){
    if($password1 != $password2){
		?> <script>alert('ERROR IN PASSWORD, IDIOT', top.location.href="index.php" )</script><?php
        
        //echo "<a href='http://localhost/mysite/form_Login.php'>&larr; &nbsp;BACK</a>";
        return false;
    }else{
        ?> <script>alert('All OK', top.location.href="index.php" )</script><?php
		
       //echo "<a href='http://localhost/mysite/'>&larr; &nbsp;HOME</a>";
        return true;}
}

public static function register($name, $family,$email,$sity,$country,$password)
{
	
    $db = Db::getConnection();
    $sql = 'INSERT INTO request (name, family,email,sity,country,password) VALUES (:name, :family,:email,:sity,:country,:password)';
    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':family', $family, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':sity', $sity, PDO::PARAM_STR);
     $result->bindParam(':country', $country, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);
    return $result->execute();
}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

