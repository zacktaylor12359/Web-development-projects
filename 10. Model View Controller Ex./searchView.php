<!-- mvc complete -->
<html>
    <form action="controller.php" method="post">
        <input type="submit" value="Search">
        <input size=40 type="text" name="name" value="<?=$name?>" placeholder="Name Starts With">
    </form>
    <br>
    <? if (!empty($data)) { ?>
        <table border="1" cellspacing="0" cellpadding="2">
            <tr>
            <th>Name</th>
            <th>Provider</th>
            <th></th>
            <th></th>
            <th></th>
            </tr>
            <? foreach ($data as $row) { ?>
                <tr>
                    <td><?=$row['person_name']?></td>
                    <td><?=$row['provider_number']?></td>
                    <td><a href="controller.php?viewid=<?=$row['personID']?>">Details</a></td>
                    <td><a href="controller.php?editid=<?=$row['personID']?>">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure?');" <a href="controller.php?deleteid=<?=$row['personID']?>">Delete</a></td>
                </tr>
            <? } ?>
        </table>
    <? } ?>
</html>