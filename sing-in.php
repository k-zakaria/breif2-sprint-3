<?php
    include 'navbar.php'; 
    if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password_user = '$pass'");    
    if (mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $_SESSION["id"]=$row['id_user'];
            header("Location: home.php");
        }
       
    }   
    else{
        echo "<script>alert('Passwords or email not corect');</script>";
        header("Location: login.php");
        exit();
    }
}
?> 

           <?php
    include 'connect.php';
    ?>
        