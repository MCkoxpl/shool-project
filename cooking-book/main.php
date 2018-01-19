<!DOCTYPE html>
<?php include("connect.php");?>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
      <h1>
    Kontakty
  </h1>
    
  <?php
  if($result=$mysqli->query("SELECT * FROM recipes ORDER BY id")){
    if($result->num_rows>0){
        while($row=$result->fetch_object()){

          echo '<div class="pin">';
            echo "<p>".$row->name."</p>";
            echo "<p>".$row->description."</p>";
            echo "</div>";
        }
    }else{
      header("location:add.php");
    }
    
  }
  ?>
<a href="add.php">Dodaj przepis</a>
  
</body>

</html>
<?php $mysqli->close(); ?>