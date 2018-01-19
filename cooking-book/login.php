<?php
include ("connect.php");

session_name("konto");
session_start;


if($result=$mysqli->query('SELECT * FROM users WHERE login="'.$_POST["log"].'"')){
   while($row=$result->fetch_object()){
     
     if( password_verify($_POST["pas"], $row->passwd)){
       setcookie("konto",$row->id,time()+(3600));
       header("location:main.php");
     }else{
     header("location:index.php?er=1");
   }}
}else{
  header("location:index.php?er=1");
$mysqli->close();}