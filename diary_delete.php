<?php
session_start();
include("functions.php");
check_session_id();

$id = $_GET["penguin_id"];



$pdo = connect_to_db();

$sql = "DELETE FROM penguin_table WHERE penguin_id=:id";



$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:top.php");
exit();