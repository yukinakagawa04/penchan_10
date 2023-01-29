<?php
include('functions.php');
session_start();

if (
    !isset($_POST['email']) || $_POST['email'] === '' ||
    !isset($_POST['password']) || $_POST['password'] === ''
) {
    exit('paramError');
}

$email = $_POST["email"];
$password = $_POST["password"];

$pdo = connect_to_db();

$sql = 'SELECT COUNT(*) FROM users_table_00 WHERE email=:email';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

if ($stmt->fetchColumn() > 0) {
    echo '<p>すでに登録されているユーザです．</p>';
    echo '<a href="login.php">login</a>';
    exit();
}

$sql = 'INSERT INTO users_table(id, email, password, is_admin, created_at, updated_at, deleted_at) VALUES(NULL, :email, :password, 0, now(), now(), NULL)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:login.php");
exit();