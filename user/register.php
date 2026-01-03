<?php
include "../config/db.php";

if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=password_hash($_POST['password'],PASSWORD_DEFAULT);

    mysqli_query($conn,"INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')");
    header("Location: login.php");
    exit;
}
include "../includes/header.php";
?>
<form method="post">
<input name="name" required placeholder="Name">
<input name="email" type="email" required placeholder="Email">
<input name="password" type="password" required placeholder="Password">
<button name="register">Register</button>
</form>
<?php include "../includes/footer.php"; ?>
