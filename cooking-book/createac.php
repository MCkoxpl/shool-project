<?php
include ("connect.php");


$login=htmlentities($_POST["log"],ENT_QUOTES);
$passwd=password_hash($_POST["pas"], PASSWORD_DEFAULT); 
if(strlen($login)!=0 && strlen($passwd)!=0 ){
  if ($stmt = $mysqli -> prepare("INSERT users (login, passwd) VALUES (?, ?)")) {
              $stmt -> bind_param("ss", $login, $passwd);
              $stmt -> execute();
              $stmt -> close();
            }
}else{
  $mysqli->close();
  header("location:newaccont.php?er=1");
}
   $mysqli->close();
header("location:index.php");