<?php
require("session.php");
$pageName = "Home";
include('header.php');
require('db.php');
require('helper.php');
$isValid = false;
if(!getSession("Auth")){
    redirect("index.php");
}else{
    setSession("status", "Loggedin successfully");
}
?>
<body>
    <div class="container">
        <h1>Laundry Management System</h1>
        <h1>Welcome Home, <?= getSession("Auth")["username"];?></h1>
        <a href="logout.php">Logout</a>
    </div>
<?php include('footer.php'); ?>