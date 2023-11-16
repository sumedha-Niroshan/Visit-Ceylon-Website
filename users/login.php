<?php
 session_start();

 require_once "../DB/dbconfig.php";
 require_once "registerfunctions.php";

 if ($_SERVER['REQUEST_METHOD']=="POST") {
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);
 }
 
 if (checkLogin($conn,$username,$password)==="1") {
    $fname=getFname($conn,$username,$password);
    $ulevel=getLevel($conn,$username);
    $_SESSION['username']=$username;
    $_SESSION['fname']=$fname;
    $_SESSION['level']=$ulevel;
    echo json_encode(["status" => "success", "message" => "success"]);
    exit;
 }
 elseif (checkLogin($conn,$username,$password)==="2") {
    echo json_encode(["status" => "error", "message" => "User not exsist"]);
    exit;
 }
 else {
    echo json_encode(["status" => "error", "message" => "Incorrect Password"]);
    exit;
 }







?>