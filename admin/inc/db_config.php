<?php
session_start();
$host = "127.0.0.1";
$user = "root";
$pass = "Rahul22-2-85";
$dbname = "hotel";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if(!$conn){
    die("cannont connect to database" . mysqli_connect_error());
}

function filteration($data){
    foreach ($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function selectone($sql,$data,$type){

    global $conn;
    $stmt = mysqli_prepare($conn,$sql);
    $stmt->bind_param($type,...$data);
    if($stmt->execute())
    {
        $result = $stmt->get_result()->fetch_assoc();
        // mysqli_stmt_get_result();
        // mysqli_stmt_get_result()->fetch_assoc();
    }
    return $result;
}


function update($sql,$data,$type){
    global $conn;

    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,$type,...$data);
    if(mysqli_stmt_execute($stmt))
    {
        $result = $stmt->affected_rows;
        return $result;
    }
}
