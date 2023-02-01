<?php
session_start();
include("functions.php");
// check_session_id();


$pdo = connect_to_db();
$sql = "SELECT * FROM penguin_table ORDER BY created_at DESC";

$stmt = $pdo->prepare($sql);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = 'SELECT *
        FROM penguin_table
        LEFT OUTER JOIN
        (
            SELECT todo_id, COUNT(id) AS like_count
            FROM like_table
            GROUP BY todo_id)
                AS result_table
                ON penguin_table.penguin_id
                    = result_table.todo_id';

$stmt = $pdo->prepare($sql);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$output = "";
foreach ($result as $record) {
    if ($record["like_count"] >= 1) {
        $images = 'img/likefish.png';
    } else {
        $images = 'img/normalfish.png';
    }
    $output .= "
    <div>
    <p>{$record["username"]}</p>
    <p>{$record["penguinname"]}</p>
    <p>{$record["birth"]}</p>
    <p>{$record["penguinvalue"]}</p>
    <p>{$record["feature"]}</p>
    <p>{$record["place"]}</p>
    <td><a href='like_create.php?user_id={$user_id}&todo_id={$record["penguin_id"]}'>like{$record['like_count']}</a></td>
    <td><img src=$images alt=PL class='bigfish'></td>
    <td><a href='todo_edit.php?id={$record["id"]}'>edit</a></td>
    <td><a href='todo_delete.php?id={$record["id"]}'>delete</a></td>

    <hr>
    </div>";

}
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
    <div class="content">
        WELCOME to AQUALAND
        <div>
            ログインユーザー：
            <?= $record["username"] ?>
        </div>
        <img src=".//img/bg.jpg" width="530" height="auto">
        <a href="penguin_register.php" class="next_btn">推しのペンギンを登録する</a>
        <br>
        <div class="clear"></div>
    </div>
    <div class="content">
        <div>

            <?= $output ?>
        </div>
        <!-- 登録したペンギンが画面に出る。写真、名前、場所 -->
        <!-- <table>
            <thead>
                <tr>
                    <th>記入者ニックネーム</th>
                    <th>ペンギンの名前</th>
                    <th>孵化日</th>
                    <th>ペンギンの種類</th>
                    <th>ペンギンの特徴</th>
                    <th>施設名</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table> -->
    </div>
    <div class="content">
        <div class="control">
            <br>
            <a href="profile.php" class="back-btn">プロフィール設定</a>
            <a href="withdrawal.php" class="back-btn">サービスを解約する</a>
            <div class="clear"></div>
        </div>

    </div>

</body>