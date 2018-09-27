<?php

require_once 'header.html';
require_once '../connect_db.php';

//$query = '';
//$faculties = $pdo->query($query);
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <!--Card content-->
                <div class="card-body">
                    <form name="sutent-data" method="post" action="">
                        <!-- Heading -->
                        <h3 class="dark-grey-text text-center">
                            <strong>Данные студента:</strong>
                        </h3>
                        <hr>

                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="fio" id="form11">
                            <label for="form11">Фио</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" value="1" name="gender" id="form10">
                            <label for="form10">Пол</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="box" id="form9">
                            <label for="form9">Корпус (A,B,C)</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="passport" id="form8">
                            <label for="form8">Пасспорт</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="fac-id" id="form7">
                            <label for="form7">Факультет (id)</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="course" id="form6">
                            <label for="form6">Курс</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="group" id="form5">
                            <label for="form5">Группа</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-table prefix grey-text"></i>
                            <input type="text" class="form-control" name="room_id" id="form4" value="1">
                            <label for="form4">Комната (id)</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="form3" name="phone" class="form-control">
                            <label for="form3">Телефон</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" class="form-control" name="parents_phone" id="form2">
                            <label for="form2">Телефон родителей</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-home prefix grey-text"></i>
                            <input type="text" class="form-control" name="home_adress" id="form1">
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
