<?php

include('Library.php');

$connection = get_database_connection();

$sql = '';

if (isset($user_id) && $Golfer_id != '')
{
    $sql =<<<SQL
    UPDATE Dates
       SET Date_1  = '$Date_1' 
           Date_2  = '$Date_2' 
           Date_3  = '$Date_3'
           Date_4  = '$Date_4' 
           Date_5  = '$Date_5' 
           Date_6  = '$Date_6' 
           Date_7  = '$Date_7' 
           Date_8  = '$Date_8' 
           Date_9  = '$Date_9' 
           Date_10 = '$Date_10'
     WHERE user_id = $user_id
    SQL;
}
else
{
    $sql =<<<SQL
    INSERT INTO Dates (Date_1, Date_2, Date_3, Date_4, Date_5, 
                       Date_6, Date_7, Date_8, Date_9, Date_10)
    VALUES ('$Date_1', '$Date_2', '$Date_3', '$Date_4', '$Date_5',
            '$Date_6', '$Date_7', '$Date_8', '$Date_9', '$Date_10')
    SQL;
}

$connection->query($sql);

header('Location: index.php');