<?php
$pageName = "Signup";
include("header.php");
require("db.php");
require("helper.php");

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if(isEmpty($name) && isEmpty($username) && isEmpty($password) && isEmpty($repassword)){
        if(isPasswordValid($password, $repassword)){
            if(isConnected()){
                if(insertUserData([$name, $username, $password, $repassword])){
                    setSession("status", "Account Created");
                }else{
                    setSession("status", "Account alreday exist.");
                }
            }
        }else{
            setSession("status", "Password mismatch");
        }
    }
}

?>
<body>
    <div class="container">
    <h1>Laundry Management System</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="name">Name</label><br>
            <input type="text" name="name" required><br>
            <label for="username">Username</label><br>
            <input type="text" name="username" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br>
            <label for="password">Retype Password</label><br>
            <input type="password" name="repassword" required><br>
            <input type="submit" value="Signup" name="signup"><br>
            <hr>
            <a href="index.php">Alreday have an account</a>
        </form>
    </div>
<?php include("footer.php");?>