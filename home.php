<?php 
session_start();
echo "<h1>".'Hello,'.$_SESSION['username']."</h1>"?>

<a href='account.php'>Edit account</a>

<form action="auth.php" method="POST">
    <input type="submit" name="logout" value="log out">
</form>