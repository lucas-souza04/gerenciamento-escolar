<?php
include '../includes/db.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM alunos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    header('Location: index.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}
?>
