<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Golfers Table</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
</head>
<body>

<?php

$orderByColumn = 'Golfer_First_Name';
$orderByDirection = 'ASC';

if (isset($_GET['sort']) && isset($_GET['order'])) {
    $orderByColumn = $_GET['sort'];
    $orderByDirection = $_GET['order'];
}

$content = isset($_GET['content']) ? $_GET['content'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';
$filterBy = isset($_GET['filterBy']) ? $_GET['filterBy'] : '';

$filterCondition = '';
if (!empty($search) && !empty($filterBy)) {
    $filterCondition = "WHERE $filterBy LIKE '%$search%'";
}

$connection = get_database_connection();

$sql = <<<SQL
SELECT Golfer_id, Golfer_First_Name,  Golfer_Last_Name,  Golfer_Age,  Golfer_Majors,  Golfer_Wins, Golfer_Sponsor,  
       Golfer_Driver, Golfer_Wood,  Golfer_Irons,  Golfer_Wedges,  Golfer_Ball
FROM Golfers $filterCondition
ORDER BY $orderByColumn $orderByDirection
SQL;

$result = $connection->query($sql);
?>

<table id="golfersTable" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>
                First Name
                <a href="?sort=Golfer_First_Name&order=<?php echo ($orderByColumn == 'Golfer_First_Name' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon1" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Last Name
                <a href="?sort=Golfer_Last_Name&order=<?php echo ($orderByColumn == 'Golfer_Last_Name' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon2" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Age
                <a href="?sort=Golfer_Age&order=<?php echo ($orderByColumn == 'Golfer_Age' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon3" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Majors Won
                <a href="?sort=Golfer_Majors&order=<?php echo ($orderByColumn == 'Golfer_Majors' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon4" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Wins
                <a href="?sort=Golfer_Wins&order=<?php echo ($orderByColumn == 'Golfer_Wins' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon5" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Sponsor
                <a href="?sort=Golfer_Sponsor&order=<?php echo ($orderByColumn == 'Golfer_Sponsor' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon6" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Driver
                <a href="?sort=Golfer_Driver&order=<?php echo ($orderByColumn == 'Golfer_Driver' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon7" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Wood
                <a href="?sort=Golfer_Wood&order=<?php echo ($orderByColumn == 'Golfer_Wood' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon8" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Irons
                <a href="?sort=Golfer_Irons&order=<?php echo ($orderByColumn == 'Golfer_Irons' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon9" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Wedges
                <a href="?sort=Golfer_Wedges&order=<?php echo ($orderByColumn == 'Golfer_Wedges' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon10" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
            <th>
                Ball
                <a href="?sort=Golfer_Ball&order=<?php echo ($orderByColumn == 'Golfer_Ball' && $orderByDirection == 'asc') ? 'desc' : 'asc'; ?>">
                    <span id="sort-icon11" data-sort-order="<?php echo $orderByDirection; ?>">
                        <img src="https://as1.ftcdn.net/v2/jpg/02/52/48/62/1000_F_252486270_nwCFOCDQrxWeQSA5CI1PwPnjd5GOY4WB.jpg" alt="Filter Icon" style="width: 2em; height: 2em;">
                    </span>
                </a>
            </th>
        </tr>
    </thead>
    <tbody>

<?php
while ($row = $result->fetch_assoc())
{
    echo '<tr>';
    echo '<td>';
    echo '<a href="Index.php?content=Golfer-detail&id=' . $row['Golfer_id'] . '">' . $row['Golfer_First_Name'] . '</a>';
    echo '</td>';
    echo '<td>' . $row['Golfer_Last_Name'] . '</td>';
    echo '<td>' . $row['Golfer_Age'] . '</td>';
    echo '<td>' . $row['Golfer_Majors'] . '</td>';
    echo '<td>' . $row['Golfer_Wins'] . '</td>';
    echo '<td>' . $row['Golfer_Sponsor'] . '</td>';
    echo '<td>' . $row['Golfer_Driver'] . '</td>';
    echo '<td>' . $row['Golfer_Wood'] . '</td>';
    echo '<td>' . $row['Golfer_Irons'] . '</td>';
    echo '<td>' . $row['Golfer_Wedges'] . '</td>';
    echo '<td>' . $row['Golfer_Ball'] . '</td>';
    echo '</tr>';
}

?>
    </tbody>
</table>

<a href="index.php?content=Golfer-detail" class="btn btn-primary" role="button" aria-disabled="true">Add a Golfer</a>

<script>
    $(document).ready(function() {
        var table = $('#golfersTable').DataTable({
            "order": [[0, "asc"]],
        });

        $('#golfersTable thead th').each(function(index) {
            var title = $(this).text();
            var columnName = $(this).find('a').attr('href').split('=')[1].split('&')[0];
            $(this).html('<input type="text" placeholder="Search ' + title + '" data-column-name="' + columnName + '" />');

            $('input', this).on('keyup change', function() {
                var columnName = $(this).data('column-name');
                if (table.column(columnName).search() !== this.value) {
                    table
                        .column(columnName)
                        .search(this.value)
                        .draw();
                }
            });
        });
    });
</script>

</body>
</html>
