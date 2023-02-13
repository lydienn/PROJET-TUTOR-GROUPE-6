<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "response";

if(isset($_POST['submit'])){
    

    $n = 20;
    $code = bin2hex(random_bytes($n));
    


    
    
}
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



header("location:./expédier_success.php");
?>