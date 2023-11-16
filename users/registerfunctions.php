<?php

function checkNull($username, $fname, $lname, $pass, $gender, $mobile, $ulevel, $address)
{
    if ($username == " " || $fname == " " || $lname == " " || $pass == " " || $gender == " " || $mobile == " " || $ulevel == " " || $address == " ") {
        return "1";
    } else {
        return "0";
    }
}


function checkUsername($conn, $username){
    /*CHECK WHETHER USERNAME ALREADY EXSIST*/

    $stmt = $conn->prepare("SELECT * FROM USER WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        return "1";
    } else {
        return "0";
    }
}

function getGenderId($gender){
    if ($gender==="MALE") {
        return 1;
    }
    else {
        return 2;
    }
}

function getLevelId($level){
    if ($level==="Super Admin") {
        return 1;
    }
    elseif ($level==="Admin") {
        return 2;
    }
    elseif ($level==="Agent") {
        return 3;
    }
    elseif ($level==="Warehouse Manager") {
        return 4;
    }
    else {
        return 5;
    }
}

function checkLogin($conn, $username, $password) {
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            return "1"; 
        } else {
            return "0";
        }
    } else {
        return "2"; 
    }
}

function getFname($conn,$username,$password){
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $fname=$row['fname'];
            return $fname;
        } else {
            return "False";
        }
    } else {
        return "False"; 
    }
}

function getLevel($conn,$username){

    $stmt = $conn->prepare("SELECT access_level.level
    FROM user
    JOIN access_level ON user.level_id = access_level.level_id
    WHERE user.username = ?");

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row=$result->fetch_assoc();
        $ulevel=$row['level'];
        return $ulevel;
    }
    else {
        return "false";
    }


}







?>