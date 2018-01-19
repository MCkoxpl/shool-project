<!DOCTYPE html>
<?php include("connect.php"); ?>
<?php session_name("konto");
session_start();?>
<?php if(isset($_GET["edit"])){
  if($result=$mysqli->query("SELECT * FROM recipis WHERE id=".$_GET["edit"])){   
        if($row=$result->fetch_object()){}}

}
         ?>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
   <script type="text/javascript" src="ingr.js"></script>
</head>

<body>
 
    
  <form method="POST" enctype="multipart/form-data" action="<?php if(isset($_GET["edit"])){echo "edit.php?id=".$_GET["edit"] ;}else{echo "addf.php";} ?>">

       <h1>
    <?php if(isset($_GET["edit"])){echo "Edytuj Zadanie";}else{echo "Dodaj Zadanie";} ?>
  </h1><br>
    <label>Nazwa </label><br><input type="text" name="name" value="<?php if(isset($_GET["edit"])){ echo $row->name ;} ?>"><br>
    <label>Przygotowanie </label><br><textarea type="text" name="des"><?php if(isset($_GET["edit"])){ echo $row->description ;} ?></textarea><br>

      
    <br>
    <button type="submit">Akceptuj</button>
  </form>
  <?php if(isset($_GET["er"])){echo "Wypełnij wszystkie pola";}?>
</body>

</html>
<?php  $mysqli->close(); ?>