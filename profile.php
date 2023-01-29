<?php
session_start();
include("functions.php");
check_session_id();



$id = $_GET["id"];
$pdo = connect_to_db();

$sql = 'SELECT * FROM users_table_00 WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>確認画面</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="update.php" method="POST" class="content">
        <legend>プロフィール画面</legend>
        <a href="logout.php">logout</a>
        <div>
            メールアドレス
            <input type="text" name="email">
            現在の設定：
            <?= $_SESSION['email'] ?>
        </div>
        <div>
            パスワード
            <input type="text" name="password">
            現在の設定：
            <?= $_SESSION['password'] ?>
        </div>
        <div>
            <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
        </div>
        <div>
            <button>変更する</button>
        </div>
    </form>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('button').on("click", function () {
        alert('変更が完了しました。ログアウトしてもう一度ログインしてください。');
    });
</script>