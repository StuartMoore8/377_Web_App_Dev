<?php

include('library.php');

$connection = get_database_connection();

$sql = '';

if (isset($Golfer_id) && $Golfer_id != '')
{
    $sql =<<<SQL
    UPDATE Golfers
       SET Golfer_First_Name       = '$Golfer_First_Name',
           Golfer_Last_Name        = '$Golfer_Last_Name',
           Golfer_Age              = $Golfer_Age,
           Golfer_Majors           = $Golfer_Majors,
           Golfer_Wins             = $Golfer_Wins,
           Golfer_Sponsor          = '$Golfer_Sponsor',
           Golfer_Driver           = '$Golfer_Driver',
           Golfer_Wood             = '$Golfer_Wood',
           Golfer_Irons            = '$Golfer_Irons',
           Golfer_Wedges           = '$Golfer_Wedges',
           Golfer_Ball             = '$Golfer_Ball'
     WHERE Golfer_id = $Golfer_id
    SQL;
}
else
{
    $sql =<<<SQL
    INSERT INTO Golfers (Golfer_First_Name,  Golfer_Last_Name,  Golfer_Age,  Golfer_Majors,  Golfer_Wins, Golfer_Sponsor,  Golfer_Driver,
                         Golfer_Wood,  Golfer_Irons,  Golfer_Wedges, Golfer_Ball)
    VALUES ('$Golfer_First_Name', '$Golfer_Last_Name', $Golfer_Age, $Golfer_Majors, $Golfer_Wins, '$Golfer_Sponsor', '$Golfer_Driver',
            '$Golfer_Wood', '$Golfer_Irons', '$Golfer_Wedges', '$Golfer_Ball')
    SQL;
}

$connection->query($sql);

header('Location: index.php');