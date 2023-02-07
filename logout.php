<?php
require("helper.php");
require("session.php");
deleteSession("Auth");
redirect("index.php");
setSession("status", "Logged out successfully");
?>