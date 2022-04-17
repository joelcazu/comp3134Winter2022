<?php
    session_start();

    $_SESSION["confirmation"] =
    $_POST["confirmation"];
    
    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "host" && $password == "pass"){
            $message = " User confirmed";
        } else {
            $message = "User unknown!";
        }
    }
?>


<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" value="host"/>

<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" value="pass"/>

<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>