<?php
$pageName = "Login";
include("header.php");
require("db.php");
require("helper.php");

if(getSession("Auth")){
    redirect("home.php");
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(isEmpty($username) && isEmpty($password)){
        if(isConnected()){
            if(isValid([$username, $password])){
                setSession("Auth",["login-status" => "true", "username" => $username]);
                setSession("status", "Login successful");
                redirect("home.php");
            }else{
                setSession("status","Account doesn\'t exist!");
            }
        }
    }else {
        setSession("status","Username and password can't be blank");
    }
}
?>
<body>
    <div class="container">
        <h1>Laundry Management System</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username</label><br>
            <input type="text" name="username" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br>
            <input type="submit" value="Login" name="login"><br>
            <hr>
            <a href="signup.php">Create an Account</a>
        </form>
    </div>
<?php include("footer.php");?>