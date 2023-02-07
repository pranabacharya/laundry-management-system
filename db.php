<?php
$con = mysqli_connect("localhost", "root", "", "laundry");
function isValid($data){
    $con = $GLOBALS['con'];
    $query = "SELECT * FROM userdata WHERE username = '$data[0]' AND passwd = '$data[1]'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        return true;
    }else {
        return false;
    }
}
function insertUserData($data){
    $con = $GLOBALS['con'];
    if(isValid([$data[1], $data[2]])){
        return false;
    }else {
        $query = "INSERT INTO userdata(name, username, passwd, repasswd) VALUES('$data[0]', '$data[1]', '$data[2]', '$data[3]')";
        if(mysqli_query($con, $query)){
            return true;
        }else{
            echo mysqli_error($con);
            return false;
        }
    }
}
function isConnected(){
    if($GLOBALS['con']){
        return true;
    }else {
        return false;
    }
}
?>
