<?php
session_start();
include("functions.php");
check_session_id();


$id = $_GET["id"];

$pdo = connect_to_db();

$sql = "UPDATE users_table_00 SET deleted_at=now() WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:register.php");
exit();