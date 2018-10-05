<?php
require_once 'header.html';
require_once '../connect_db.php';

if ($_GET['delete']==1 && !empty($_GET['id'])){
$action = 'delete';
$title = 'Удаление студента';
$id = (int)$_GET['id'];

$delQuery = 'delete from students where id=:id';
$stmt = $pdo -> prepare('delete from students where id=:id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
//    delete from students where id=6
}
?>

<script>
    window.location.href="move-out.php?delete-success=1";
</script>
