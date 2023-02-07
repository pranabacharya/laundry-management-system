<?php
$isAuth = false;
function isEmpty($data){
    if(!empty($data)) {
        return true;
    }else{
        return false;
    }
}

function isPasswordValid($pass1, $pass2){
    if($pass1 === $pass2){
        return true;
    }else {
        return false;
    }
}
function onlyForAuthUser(){
    if($_SESSION("Auth")){
        header("location: home.php");
    }
}
function onlyForUnAuthUser(){
    if(!$_SESSION("Auth")){
        header("location: index.php");
    }
}
function setSession($key, $value){
    $_SESSION[$key] = $value;
}
function getSession($key){
    return $_SESSION[$key]??null;
}
function deleteSession($key){
    unset($_SESSION[$key]);
}
function redirect($here){
    header("location: " . $here);
}
?>