<?php
//* Uploading and reading a file
/*
 To get telephone number: 
 * "/\d{3}\-\d{3}\-\d{4} | \d{3}\-\d{4}
 * 
 To get account number: 
 * "/[a-z]{2}\d{8} | [a-z]{2}\d{4}/"
 * 
 To get sales
 * $sales = "$12.35";
    preg_match( '/(\$)(\d+\.\d{2})/', $sales, $matches );
    echo $matches[0]. " ";
    echo $matches[2];
 */
$fileName = null;
$records = 0;
$total = 0;
$rawData = null;

$data_output = "";
$file_output = "";
if (isset($_REQUEST['upload']) && !empty($_FILES['myfile']['tmp_name'])) {
    $fileName=$_FILES['myfile']['name']; 
    $contentsAsArray = file($_FILES['myfile']['tmp_name'],FILE_SKIP_EMPTY_LINES);
    $rows = array();
    $account_num;
    $tel_num;
    $sale;

    $first = true;
    foreach ($contentsAsArray as $line) {
        if($first){
            $first = false;
            continue;
        }
        if(preg_match('/[a-zA-Z]{2}\d{8}|[a-zA-Z]{2}\d{4}/', $line, $match)){
            $account_num=$match[0];
        }
        else{
            $account_num='';
        }
        if(preg_match('/\(\d{3}\).\d{3}\-\d{4}|\d{3}\-\d{4}/', $line, $match)){
            $tel_num=$match[0];
        }
        else{
            $tel_num='';
        }
        if(preg_match('/(\$)(\d+\.\d{2})/',$line, $match)){
            $sale=$match[0];
            $total+=$match[2];
        }
        else{
            $sale='';
        }
        
        $rows[]=[$account_num, $tel_num, $sale];
    }
    
    $data_output.="<tr>
            <th>Account Number</th>
            <th>Telepnone</th>
            <th>Sale</th>
            <tr>";
    foreach($rows as $record) {
        $records++;
        $data_output.="<tr>";
            foreach($record as $column) {
                $data_output.="<td>";
                $data_output.=$column;
                $data_output.="</td>";
            }
        $data_output.="</tr>";
    }
    $file_output.="<tr>
            <th>File Name</th>
            <th>Records</th>
            <th>Total</th>
            <tr>
            <td>$fileName</td>
            <td>$records</td>
            <td>$$total</td>
            </tr>";
}
?>
<html>
    <div>
        <form action="#" enctype="multipart/form-data" method="post">
            <input type="submit" value="Upload File" name="upload" />&nbsp;
            <input accept=".csv,.txt" type="file" name="myfile"/>
        </form>
    </div>
    
    <table border="1" cellspacing="0" cellpadding="2">
        
        <?=$file_output?>
    </table>
    <br>
    <table border="1" cellspacing="0" cellpadding="2">
        <?=$data_output?>
    </table>
</html>
