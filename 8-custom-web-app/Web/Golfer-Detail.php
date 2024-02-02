<?php

$Golfer_First_Name  = '';
$Golfer_Last_Name   = '';
$Golfer_Age         = '';
$Golfer_Majors      = '';
$Golfer_Wins        = '';
$Golfer_Sponsor     = '';
$Golfer_Driver      = '';
$Golfer_Wood        = '';
$Golfer_Irons       = '';
$Golfer_Wedges      = '';
$Golfer_Ball        = '';

if (isset($id))
{
    $connection = get_database_connection();

    $sql =<<<SQL
    SELECT Golfer_First_Name,  Golfer_Last_Name,  Golfer_Age,  Golfer_Majors,  Golfer_Wins, Golfer_Sponsor,  Golfer_Driver,
           Golfer_Wood,  Golfer_Irons,  Golfer_Wedges, Golfer_Ball
      FROM Golfers
      WHERE Golfer_id = $id
    SQL;

    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    $Golfer_First_Name =   $row['Golfer_First_Name'];
    $Golfer_Last_Name =    $row['Golfer_Last_Name'];
    $Golfer_Age =          $row['Golfer_Age'];
    $Golfer_Majors =       $row['Golfer_Majors'];
    $Golfer_Wins =         $row['Golfer_Wins'];
    $Golfer_Sponsor =      $row['Golfer_Sponsor'];
    $Golfer_Driver =       $row['Golfer_Driver'];
    $Golfer_Wood =         $row['Golfer_Wood'];
    $Golfer_Irons =        $row['Golfer_Irons'];
    $Golfer_Wedges =       $row['Golfer_Wedges'];
    $Golfer_Ball =         $row['Golfer_Ball'];
}

?>
<form action="Save-Golfer.php">
    <input type="hidden" class="form-control" id="Golfer_id" name="Golfer_id" value="<?php echo isset($id) ? $id : '' ?>" />

    <div class="mb-3">
        <label for="Golfer_First_Name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="Golfer_First_Name" name="Golfer_First_Name" value="<?php echo $Golfer_First_Name ?>" />
    </div>

    <div class="mb-3">
        <label for="Golfer_Last_Name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="Golfer_Last_Name" name="Golfer_Last_Name" value="<?php echo $Golfer_Last_Name ?>" />
    </div>

    <div class="mb-3">
        <label for="Golfer_Age" class="form-label">Age</label>
        <input type="number" class="form-control" id="Golfer_Age" name="Golfer_Age" value="<?php echo $Golfer_Age ?>" />
    </div>

    <div class="mb-3">
        <label for="Golfer_Majors" class="form-label">Majors</label>
        <input type="text" class="form-control" id="Golfer_Majors" name="Golfer_Majors" value="<?php echo $Golfer_Majors ?>" />
    </div>

    <div class="mb-3">
        <label for="Golfer_Wins" class="form-label">Wins</label>
        <input type="number" class="form-control" id="Golfer_Wins" name="Golfer_Wins" value="<?php echo $Golfer_Wins ?>" />
    </div>

    <div class="mb-3">
        <label for="Golfer_Sponsor" class="form-label">Sponsor</label>
        <select class="form-select" name="Golfer_Sponsor">
            <option <?php echo $Golfer_Sponsor == 'None' ? 'selected' : '' ?>>None</option>
            <option <?php echo $Golfer_Sponsor == 'Callaway' ? 'selected' : '' ?>>Callaway</option>
            <option <?php echo $Golfer_Sponsor == 'Cobra' ? 'selected' : '' ?>>Cobra</option>
            <option <?php echo $Golfer_Sponsor == 'Ping' ? 'selected' : '' ?>>Ping</option>
            <option <?php echo $Golfer_Sponsor == 'TaylorMade' ? 'selected' : '' ?>>TaylorMade</option>
            <option <?php echo $Golfer_Sponsor == 'Titleist' ? 'selected' : '' ?>>Titleist</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="Golfer_Driver" class="form-label">Driver</label>
        <input type="text" class="form-control" id="Golfer_Driver" name="Golfer_Driver" value="<?php echo $Golfer_Driver ?>" />
    </div>

    <div class="mb-3">
        <label for="Golfer_Wood" class="form-label">Wood</label>
        <input type="text" class="form-control" id="Golfer_Wood" name="Golfer_Wood" value="<?php echo $Golfer_Wood ?>" />
    </div>

    <div class="mb-3">
        <label for="Golfer_Irons" class="form-label">Irons</label>
        <input type="text" class="form-control" id="Golfer_Irons" name="Golfer_Irons" value="<?php echo $Golfer_Irons ?>" />
    </div>

    <div class="mb-3">
        <label for="Golfer_Wedges" class="form-label">Wedges</label>
        <input type="text" class="form-control" id="Golfer_Wedges" name="Golfer_Wedges" value="<?php echo $Golfer_Wedges ?>" />
    </div>

    <div class="mb-3">
        <label for="Golfer_Ball" class="form-label">Ball</label>
        <input type="text" class="form-control" id="Golfer_Ball" name="Golfer_Ball" value="<?php echo $Golfer_Ball ?>" />
    </div>



    <button type="submit" class="btn btn-primary">Save</button>
    <a href="index.php?content=Golfer-list" class="btn btn-secondary" role="button" aria-disabled="true">Cancel</a>
<?php if (isset($id)) { ?>
    <button type="button" class="btn btn-danger" onclick="deleteGolfer()">Delete</button>
    <script>

    function deleteGolfer() 
    {
        if (confirm('Are you sure you want to delete this Golfer?')) {
            location.href = 'delete-Golfer.php?id=<?php echo isset($id) ? $id : '' ?>';
        }
    }

    </script>
<?php } ?>
</form>