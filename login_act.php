<?php
// データ受け取り

include('functions.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];



// DB接続
$pdo = connect_to_db();

// SQL実行
$sql = "SELECT * FROM users_table_00 WHERE email= :email AND password = :password AND deleted_at IS NULL";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}
// ユーザ有無で条件分岐
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo '<p>ログイン情報に誤りがあります</p>';
    echo '<a href = "login.php">ログイン</a>';
    exit();
} else {
    $_SESSION = array();
    $_SESSION['session_id'] = session_id();
    $_SESSION['id'] = $user['id'];
    $_SESSION['is_admin'] = $user['is_admin'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];
    header("Location:top.php");
    exit();
}