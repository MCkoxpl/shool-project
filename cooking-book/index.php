<?php 
if(isset($_SESSION)){
  session_name("konto");
  session_destroy();}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>

<body>
   <div  id="main" class="pin">
     <div class="dpin">
     </div>
     <h1>
    Przepisy
  </h1>
    
  <form method="POST" enctype="multipart/form-data" action="login.php">
 
    <h2>
      Zaloguj się 
    </h2><br>
    <label>Login </label><br><input type="text" name="log"><br>
    <label>Hasło </label><br><input type="password" name="pas"><br>
    <br>
    <div class="bbar">
    <a href="main.php" class="butt" onclick="document.forms[0].submit();return false;">Zaloguj się</a>
    <a href="newaccont.php" class="butt">Nowe konto</a>
        </div>
    <?php if(isset($_GET["er"])){echo "Złe dane logowania";}?>
  </form>
     </div>
</body>

</html>