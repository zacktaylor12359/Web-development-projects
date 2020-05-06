<!-- mvc complete -->
<html>
    <form action="controller.php" method="post">
            <button type="submit" class="btn btn-primary" name="back">
                  Back
            </button>
            &nbsp;
            <button type="submit" class="btn btn-primary" name="save">
                  Save
            </button>
        <br><br>
        <table border="1" cellspacing="0" cellpadding="2">
            <tr>
                <td><b>ID</b></td>
                <td><?=$personID?></td>
            </tr>
            <tr>
                <td><b>Person Name</b></td>
                <td><input type="text" value="<?=$person_name?>" name="person_name"</td>
            </tr>
            <tr>
                <td><b>Provider</b></td>
                <td><input type="text" value="<?=$provider_number?>" name="provider_number"</td>
            </tr>
            <tr>
                <td><b>Location</b></td>
                <td><input type="text" value="<?=$locationID?>" name="locationID"</td>
            </tr>
        </table>
    <form>
</html>
