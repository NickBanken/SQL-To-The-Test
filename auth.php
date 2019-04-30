<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<?php require_once 'header.php'; ?>


<?php
session_start();

    if(isset($_POST["save"])):
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordcon =$_POST["password-con"];

        if ($password === $passwordcon) {
            $query = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'username' => $username,
                'email' => $email,
                'password' => $password
            ];
    
            $sql = "INSERT INTO Users(firstname,lastname,username,email,password)VALUES(:firstname,:lastname,:username,:email,:password)";
            
            $sqlExec = $handler->prepare($sql);
            $sqlExec->execute($query);
            
            header('location: index.php');
            }
            else {
                $_SESSION['message'] = "Password did not match!";
                $_SESSION['msg_type'] = "warning";
                header('location: register.php');
            }
        endif;
        
        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            $query = [
                'username' => $username,
                'password' => $password
            ];

            $sql = "SELECT * FROM Users WHERE username = :username AND password = :password";

            $sqlExec = $handler->prepare($sql);
            $sqlExec->execute($query);

            $rowcount = $sqlExec->fetch(PDO::FETCH_ASSOC);
            if($rowcount > 0){
                $_SESSION['username'] = $rowcount['username'];
                header('location:home.php');
            }
            else{
                $_SESSION['message'] = "Incorrect username or password!";
                $_SESSION['msg_type'] = "warning";
                header('location:log-in.php');
            } 

        }




?>


