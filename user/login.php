<?php
session_start();
include "../config/db.php";

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $res=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($res)==1){
        $u=mysqli_fetch_assoc($res);
        if(password_verify($password,$u['password'])){
            $_SESSION['user_id']=$u['id'];
            $_SESSION['role']=$u['role'];

            if($u['role']=='admin'){
                header("Location: ../admin/dashboard.php");
            } else {
                header("Location: dashboard.php");
            }
            exit;
        }
    }
    $error="Invalid email or password";
}
include "../includes/header.php";
if(isset($error)) echo $error;
?>
<form method="post">
<input name="email" type="email" required>
<input name="password" type="password" required>
<button name="login">Login</button>
</form>
<?php include "../includes/footer.php"; ?>
