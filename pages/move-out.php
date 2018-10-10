<?php
require_once 'header.html';
require_once '../connect_db.php';

$query = 'SELECT id, fio, room_id FROM students';
$objStudents = $pdo->prepare($query);
$objStudents->execute();
$arrStudents = $objStudents -> fetchAll(PDO::FETCH_ASSOC);

if ($_GET['delete-success'] == 1) {
    echo "";
}elseif ($_GET['move-out-success'] ==1) {

}

//if ($_GET['move-out']==1 && !empty($_GET['id'])) {
//    $action = 'move-out';
//    $title = 'Выселение студента';
//    $id = (int)$_GET['id'];
//
//}elseif ($_GET['delete']==1 && !empty($_GET['id'])){
//    $action = 'delete';
//    $title = 'Удаление студента';
//    $id = (int)$_GET['id'];
//    $delQuery = 'delete from students where id=:id';
//    $stmt = $pdo -> prepare('delete from students where id=:id');
//    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
//    $stmt->execute();
//
////    delete from students where id=6
//}else {
////    echo 'GET is empy. Nothing to do';
//}

?>

<div class="table-students">
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm" hidden>id
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">ФИО
<i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Комната
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Действие
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
            </tr>
            </thead>
            <tbody>
                <?
                foreach ($arrStudents as $id => $student) {
                    $id = $student['id'];
                    echo '<tr>';
                    echo '<td hidden>'.$student['id'].'</td>';
                    echo '<td>'.$student['fio'].'</td>';
                        echo '<td>'.$student['room_id'].'</td>';
                        echo "<td>
<a onclick=\"return confirm('Вы уверены, что хотите выселить студента ?')\" href='action-move-out.php?move-out=1&id=$id' role='button' class='btn btn-warning waves-effect btn-sm'>Выселить</a>
<a onclick=\"return confirm('Вы уверены, что хотите удалить студента ?')\" href='action-delete.php?delete=1&id=$id' role='button'  class='btn btn-danger mx-5 waves-effect btn-sm'>Удалить</a>
<a href='update-form.php?update=1&id=$id' role='button'  class='btn btn-primary mx-5 waves-effect btn-sm'>Редактировать</a>
</td>";
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
</div>


<!--    добавить к кнопке data-toggle='modal' -->
<!--    data-target='#prooveModal'-->
<!-- Подтвеждение действия (модальное окно)   -->
<!--    <div class="modal fade" id="prooveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog" role="document">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h5 class="modal-title" id="exampleModalLabel">--><?//=$title ?><!--</h5>-->
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                        <span aria-hidden="true">&times;</span>-->
<!--                    </button>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    ...-->
<!--                </div>-->
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-success">Подтвердить</button>-->
<!--                    <button type="button" class="btn btn-primary" data-dismiss="modal">Отмена</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

