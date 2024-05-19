<?php
$mysqli = new mysqli("localhost", "root", "", "users");
session_start();
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

function selectAll()
{
    global $mysqli;
    // $stmt = $mysqli->prepare("INSERT INTO tasks (title, description) VALUES ('HELP-MOM','HELP-MOM')");
    // $stmt->execute();
    $sql = "SELECT * FROM users";
    $result = $mysqli->query($sql);
    if (!$result) {
        echo "FALID TO SELECT ALL";
        exit();
    }
    // echo "<pre>";
    $allRecords = [];
    while ($record = $result->fetch_assoc()) {
        $allRecords[] = $record;
    }

    // echo "</pre>";

    $mysqli->close();
    return $allRecords;
}

function selectOne($id = NULL)
{
    global $mysqli;
    // $stmt = $mysqli->prepare("INSERT INTO tasks (title, description) VALUES ('HELP-MOM','HELP-MOM')");
    // $stmt->execute();
    $sql = "SELECT * FROM users WHERE id = '$id' limit 1";
    $result = $mysqli->query($sql);
    if (!$result) {
        echo "FALID TO SELECT user";
        exit();
    }
    // echo "<pre>";


    // echo "</pre>";

    $mysqli->close();
    return $result->fetch_assoc();
}

function insertNewUser($name = NULL, $email = NULL, $password = NULL)
{
    global $mysqli;
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
    $result = $mysqli->query($sql);
    if ($result === TRUE) {
        $_SESSION['message'] = 'Task Saved Successfully';
        $_SESSION['message_type'] = 'success';
        header('Location:index.php');
    } else {
        echo "didnt insert";
    }
    $mysqli->close();
}

function updateUser($name = NULL, $email = NULL, $password = Null)
{
    global $mysqli;
    $sql = "UPDATE users set name = '$name',email='$email',password='$password'";
    $result = $mysqli->query($sql);
    if (!$result) {
        var_dump($result);
        exit();
    } else {
        header('Location:index.php');
    }
    $mysqli->close();
}
