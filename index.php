<?
require_once 'connect_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DB Student Hostel</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

  <a href="querry/all-students.php" type="button" class="btn btn-primary">Просмотр всех студентов</a>
  <a type="button" class="btn btn-primary">Просмотр всех факультетов</a>

  <div class="table-students">
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>
              <th class="th-sm">ID
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Name
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Gender
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Block
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Passport
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Fac_ID
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Course
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Group num
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">room id
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">personal_phone
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">per_phone
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">address
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>

          </tr>
          </thead>
      <?
        $query = 'SELECT * FROM students';
        $students = $pdo->query($query);

//        foreach ($students as $student) {
//            echo "<tr>";
//                foreach ($student as $v) {
//                    echo "<td>";
//                    echo $v;
//                    echo "</td>";
//                }
//            echo "</tr>";
//        }

      foreach ($students as $student) {
          var_dump($student);
          foreach ($student as $v) {
              //var_dump($v);
          }
      }
      ?>
      </table>

  </div>





  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
      <tr>
          <th class="th-sm">Name
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
          </th>
          <th class="th-sm">Position
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
          </th>
          <th class="th-sm">Office
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
          </th>
          <th class="th-sm">Age
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
          </th>
          <th class="th-sm">Start date
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
          </th>
          <th class="th-sm">Salary
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
          </th>
      </tr>
      </thead>
      <tbody>
      <tr>
          <td>Tiger Nixon</td>
          <td>System Architect</td>
          <td>Edinburgh</td>
          <td>61</td>
          <td>2011/04/25</td>
          <td>$320,800</td>
      </tr>

  </table>


<!--  возможно поиск по таблице-->
  <script>
      $(document).ready(function () {
          $('#dtBasicExample').DataTable();
          $('.dataTables_length').addClass('bs-select');
      });
  </script>






















      

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
