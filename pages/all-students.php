<body>


<div class="table-students table-responsive-md">
    <table id="dtBasicExample" class="table table-striped table-bordered w-auto" >
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

        foreach ($students as $student) {
            echo "<tr>";
            foreach ($student as $v) {
                echo "<td>";
                echo $v;
                echo "</td>";
            }
            echo "</tr>";
        }

        ?>
    </table>

</div>



<!--  возможно поиск по таблице-->
<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>