<?php 
    session_start();  
    $_SESSION["confirmation"] = "random";
?>

<html>
<body>

<h1>Lab Ex</h1>
<form name="loginForm">
     <input type="hidden" name="username" value="host">
     <input type="hidden" name="password" value="pass">
     <input type="hidden" name="confirmation" value="<?php echo $_SESSION["confirmation"] ?>">
  </form>
<button onclick="window.location.href='csfr.php'">
Login Here </button>
</body>
</html>

