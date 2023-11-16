<?php

require_once "../DB/dbconfig.php";
require_once "registerfunctions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_STRING);
    $fname = strtoupper($fname);  

    $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_STRING);
    $lname = strtoupper($lname); 

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_STRING);
    $gender = strtoupper($gender); 

    $conpass = filter_input(INPUT_POST, "conpass", FILTER_SANITIZE_STRING);
    $mobile = filter_input(INPUT_POST, "mobile", FILTER_SANITIZE_STRING);
    $ulevel = filter_input(INPUT_POST, "ulevel", FILTER_SANITIZE_STRING);

    $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
    $address = strtoupper($address);

}

if (checkNull($username,$fname,$lname,$conpass,$gender,$mobile,$ulevel,$address)=="1") {
    echo json_encode(["status" => "error", "message" => "Null inputs are not allowed"]);
    exit;
}

if (checkUsername($conn, $username)=="1") {
    echo json_encode(["status" => "error", "message" => "Username already exists"]);
    exit;
}
else {
    $gender_id=getGenderId($gender);
    $level_id=getLevelId($ulevel);

    $hashedPassword = password_hash($conpass, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user (username, password, fname, lname, tele, address, gender_id, level_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssii", $username, $hashedPassword, $fname, $lname, $mobile, $address, $gender_id, $level_id);
    
    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "User registered successfully"]);
    }
    else{
        echo json_encode(["status" => "error", "message" => "Failed to create the user"]);
    }
}










?>