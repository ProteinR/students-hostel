<?php

require_once 'header.html';
require_once '../connect_db.php';

$query = 'SELECT * FROM faculties';
$facObj = $pdo->query($query); //объект с рез-том запроса


$arrFaculties = $facObj->fetchAll(PDO::FETCH_KEY_PAIR); //массив вида $id => $value


//echo "<pre>";
//var_dump($arrFac);
//echo "</pre>";
//
//foreach ($arrFac as $id => $facName) {
//    echo "$id => $facName";
//    echo "<br>";
//}

?>




<div class="container my-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <!--Card content-->
                <div class="card-body">
                    <form name="sutent-data" method="post" action="" class="" >
                        <!-- Heading -->
                        <h3 class="dark-grey-text text-center">
                            <strong>Данные студента:</strong>
                        </h3>
                        <hr>



                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="fio" id="form11">
                            <label for="form11">Фио</label>
                            <div class="invalid-tooltip">
                                Пожалуйста, введите ФИО.
                            </div>
                        </div>

                        <div class="select md-form" >
                            <i class="fa fa-genderless prefix grey-text"></i>
                            <select class="select-text" style="" name="gender" required>
                                <option value="" disabled selected></option>
                                <option value="1">Мужской</option>
                                <option value="0">Женский</option>
                            </select>
                            <span class="select-highlight"></span>
                            <span class="select-bar"></span>
                            <label class="select-label">Пол</label>
                        </div>

<!--                        <div class="md-form">-->
<!--                            <i class="fa fa-user prefix grey-text"></i>-->
<!--                            <input type="text" class="form-control" value="1" name="gender" id="form10">-->
<!--                            <label for="form10">Пол</label>-->
<!--                        </div>-->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="block" id="form9">
                            <label for="form9">Корпус (A,B,C)</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="passport" id="form8">
                            <label for="form8">Пасспорт</label>
                        </div>
<!--                        <div class="md-form">-->
<!--                            <i class="fa fa-user prefix grey-text"></i>-->
<!--                            <input type="text" class="form-control" name="fac_id" id="form7">-->
<!--                            <label for="form7">Факультет (id)</label>-->
<!--                        </div>-->

                        <div class="select md-form" >
                            <i class="fa fa-building prefix grey-text"></i>
                            <select class="select-text" style="" name="fac_id" required>
                                <option value="" disabled selected></option>
                                <?
                                    foreach ($arrFaculties as $id => $facName) {
                                        echo "<option value='{$id}'>$facName </option>>";
                                    }

                                ?>

                            </select>
                            <span class="select-highlight"></span>
                            <span class="select-bar"></span>
                            <label class="select-label">Факультет</label>
                        </div>



                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="course" id="form6">
                            <label for="form6">Курс</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="group_number" id="form5">
                            <label for="form5">Группа</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-table prefix grey-text"></i>
                            <input type="text" class="form-control" name="room_id" id="form4" value="1">
                            <label for="form4">Комната (id)</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="form3" name="personal_phone" class="form-control">
                            <label for="form3">Телефон</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" class="form-control" name="parents_phone" id="form2">
                            <label for="form2">Телефон родителей</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-home prefix grey-text"></i>
                            <input type="text" class="form-control" name="home_address" id="form1">
                            <label for="form1">Домашний адресс</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-yellow waves-effect waves-light black-text">Отправить</button>
                            <hr>
                            <fieldset class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox1">
                                <label for="checkbox1" class="form-check-label dark-grey-text">Subscribe me to the newsletter</label>
                            </fieldset>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>

    <?
//    var_dump($_POST);
    if ($_POST['fio'] != ''){
        echo "Выполняет запрос";



        $fio = htmlspecialchars(strip_tags($_POST['fio']));
        $gender = (bool)($_POST['gender']);
        $block = htmlspecialchars(strip_tags($_POST['block']));
        $passport = htmlspecialchars(strip_tags($_POST['passport']));
        $fac_id = (int)htmlspecialchars(strip_tags($_POST['fac_id']));
        $course = htmlspecialchars(strip_tags($_POST['course']));
        $group_number = htmlspecialchars(strip_tags($_POST['group_number']));
        $room_id = (int)htmlspecialchars(strip_tags($_POST['room_id']));
        $personal_phone = htmlspecialchars(strip_tags($_POST['personal_phone']));
        $parents_phone = htmlspecialchars(strip_tags($_POST['parents_phone']));
        $home_address = htmlspecialchars(strip_tags($_POST['home_address']));

//        echo "<pre>";
//        var_dump($gender);
//        echo "</pre>";


        $stmt = $pdo->prepare("INSERT INTO students (fio, gender, block, passport, fac_id, course, group_number, room_id, personal_phone, parents_phone, home_address) 
                                VALUES (:fio, :gender, :block, :passport, :fac_id, :course, :group_number, :room_id, :personal_phone, :parents_phone, :home_address)");
        $stmt->bindParam(':fio', $fio);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_BOOL);
        $stmt->bindParam(':block', $block);
        $stmt->bindParam(':passport', $passport);
        $stmt->bindParam(':fac_id', $fac_id, PDO::PARAM_INT);
        $stmt->bindParam(':course', $course);
        $stmt->bindParam(':group_number', $group_number);
        $stmt->bindParam(':room_id', $room_id, PDO::PARAM_INT);
        $stmt->bindParam(':personal_phone', $personal_phone);
        $stmt->bindParam(':parents_phone', $parents_phone);
        $stmt->bindParam(':home_address', $home_address);
        $stmt->execute();

        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

    }else {
        echo "не соблюдено условие";
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

    }
    ?>

