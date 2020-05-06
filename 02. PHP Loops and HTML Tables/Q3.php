<?php
    $rows = 15;
    $columns = 5;  
    $tab_string = "";
    for($i=1; $i<=$rows; $i++)
    {
        $tab_string .= "<tr>";
        for($j=1; $j<=$columns; $j++)
        {
            $tab_string.="<td>Row: $i Cell: $j</td>";
        }
        $tab_string.="</tr>";
    }
?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<table>
<?php echo $tab_string;?>
</table>
</body>
</html>