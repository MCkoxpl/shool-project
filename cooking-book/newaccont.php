<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body><div id="main" class="pin">
  
 
      <h1>
    Przepisy
  </h1>
    
  <form method="POST" enctype="multipart/form-data" action="createac.php">
 
    <h2>
      Utwórz konto
    </h2><br>
    <label>Login </label><br><input type="text" name="log"><br>
    <label>Hasło </label><br><input type="password" name="pas">
    <?php if(isset($_GET["er"])){echo "Nie udalo sie utworzyc konta";}?>
    <br>
    <a href="index.php" class="butt" onclick="document.forms[0].submit();return false;">Załóż konto</a>
  </form>
 </div>
</body>

</html>