<?php
include('functions.php');
session_start();

//入力チェック
if (
    !isset($_POST['username']) || $_POST['username'] === '' ||
    !isset($_POST['penguinname']) || $_POST['penguinname'] === '' ||
    !isset($_POST['birth']) || $_POST['birth'] === '' ||
    !isset($_POST['penguinvalue']) || $_POST['penguinvalue'] === '' ||
    !isset($_POST['feature']) || $_POST['feature'] === '' ||
    !isset($_POST['place']) || $_POST['place'] === '' ||
    !isset($_FILES['pic']['name']) || $_FILES['pic']['name'] === '' ||
    !isset($_FILES['pic']['type']) || $_FILES['pic']['type'] === ''
) {
    exit('paramError');
}

//データ受け取り
$username = $_POST["username"];
$penguinname = $_POST["penguinname"];
$birth = $_POST["birth"];
$penguinvalue = $_POST["penguinvalue"];
$feature = $_POST["feature"];
$place = $_POST["place"];
$type = $_FILES['pic']['type'];
$upimg = $_FILES['pic']['name'];

$upload_dir = '';
$uploaded_path = date('YmdHis') . $upimg;
$save_path = $upload_dir . $uploaded_path;

$upload = move_uploaded_file($_FILES['pic']['tmp_name'], $save_path);



// DB接続
$pdo = connect_to_db();

// SQL作成
$sql =
    'INSERT INTO penguin_table
            (
                penguin_id,
                username,
                penguinname,
                birth,
                penguinvalue,
                feature,
                place,
                img_type,
                photo,
                created_at,
                updated_at
            )
            VALUES
            (
                NULL,
                :username,
                :penguinname,
                :birth,
                :penguinvalue,
                :feature,
                :place,
                :img_type,
                :photo,
                now(),
                now()
            )';



$stmt = $pdo->prepare($sql);


// バインド変数を設定
// $stmt->bindValue(':penguin_id', $penguin_id, PDO::PARAM_INT);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':penguinname', $penguinname, PDO::PARAM_STR);
$stmt->bindValue(':birth', $birth, PDO::PARAM_STR);
$stmt->bindValue(':penguinvalue', $penguinvalue, PDO::PARAM_STR);
$stmt->bindValue(':feature', $feature, PDO::PARAM_STR);
$stmt->bindValue(':place', $place, PDO::PARAM_STR);
$stmt->bindValue(':img_type', $type, PDO::PARAM_STR);
$stmt->bindValue(':photo', $save_path, PDO::PARAM_STR);


// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit('sql error');
}


header("Location:top.php");
exit();
?>