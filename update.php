<?php
session_start();
include("functions.php");
check_session_id();

//チェック①


if (
    !isset($_POST['email']) || $_POST['email'] === '' ||
    !isset($_POST['password']) || $_POST['password'] === '' ||
    !isset($_POST['id']) || $_POST['id'] === ''
) {
    exit('paramError');
}


$email = $_POST["email"];
$password = $_POST["password"];
$id = $_POST["id"];


//チェック②

$pdo = connect_to_db();

$sql = "UPDATE users_table_00 SET email=:email, password=:password, updated_at=now() WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);


try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:profile.php");
exit();