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
   <div id="main">
     
     <h1>
    Dashboard
  </h1>
    
  <form method="POST" enctype="multipart/form-data" action="login.php">
 
    <h2>
      Zaloguj się 
    </h2><br>
    <label>Login </label><br><input type="text" name="log"><br>
    <label>Hasło </label><br><input type="password" name="pas"><br>
    <br>
    <button type="submit">Zaloguj się</button>
    <?php if(isset($_GET["er"])){echo "Złe dane logowania";}?>
  </form>
  <form action="newaccont.php">
    <button type="submit">
      Nowe konto
    </button>
  </form>
     </div>
</body>

</html>