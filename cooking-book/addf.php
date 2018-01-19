<!DOCTYPE html>
<?php include("connect.php");
session_name("konto");
session_start();

$name=htmlentities($_POST["name"],ENT_QUOTES);
$des=htmlentities($_POST["des"],ENT_QUOTES);

if(strlen($name)!=0 ){
  if ($stmt = $mysqli -> prepare("INSERT recipes (u_id, name, description) VALUES (?, ?, ?)")) {
              $stmt -> bind_param("iss", $_COOKIE["konto"], $name, $des);
              $stmt -> execute();
              $stmt -> close();
    header("location:main.php");
            }
  
}else{
  header("location:add.php?er=1");
}
   $mysqli->close();

?>
