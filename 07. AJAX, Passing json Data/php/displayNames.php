<?php
require_once 'db.php';
$sql2 = "Select lastname_firstname FROM assignment8 ORDER BY lastname_firstname";
$result= execute($sql2);
$nameList = implode("\n", $result);
$val['names'] = $nameList;
echo(json_encode($val));