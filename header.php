<?php require("session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS <?php echo $pageName ?? ""; ?></title>
    <style>
        .container {
            width: 70%;
            margin: 0 auto;
        }
        input {
            padding: 5px;
            font-size: 20px;
        }
        hr{
            border: 2px solid black;
            border-radius: 10px;
            width: 100%;
        }
        a {
            text-decoration: none;
            padding: 3px 10px;
            background-color: blue;
            color: white;
            border-radius: 8px;
            width: 100%;
        }
        .alert{
            padding: 8px;
            border-radius: 4px;
            font-size: medium;
            text-align: center;
            width: 20%;
            position: absolute;
            right: 5px;
        }
        input[type="submit"]{
            margin-top: 3px;
            width: 30%;
            background-color: blue;
            border-radius: 4px;
            color: white;
        }
        input:not(input[type="submit"]) {
            width: 50%;
        }
        input[type="submit"]:hover{
            cursor: pointer;
        }
        .error {
            background-color: red;
            color: white;
        }
        .success {
            background-color: green;
            color: white;
        }
    </style>
</head>