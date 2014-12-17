<?php
/*
Site	:	WWW.FEWPRESS.COM
Author	:	Md. Rokonuzzaman Rokon
 * 
 */
 require_once 'config.php';

 if(!empty($_POST['name'])){
     $name=$_POST['name'];
     $res=mysql_query("select count(user_name) as count from users where user_name='$name'") or die(mysql_error()); 
     $count=mysql_fetch_array($res);
     if($count[0]==0){
         echo 'true';
     }else{
         echo 'false';
     }
 }
?>