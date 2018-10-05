<?php

require_once 'header.html';
require_once '../connect_db.php';

if ($_GET['move-out']==1 && !empty($_GET['id'])) {
    $action = 'move-out';
    $title = 'Выселение студента';
    $id = (int)$_GET['id'];

    $moveQuery = 'UPDATE students SET room_id = NULL WHERE id =:id';
    $stmt = $pdo -> prepare('UPDATE students SET room_id = NULL WHERE id =:id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}
?>

<script>
    window.location.href="move-out.php?move-out-success=1";
</script>