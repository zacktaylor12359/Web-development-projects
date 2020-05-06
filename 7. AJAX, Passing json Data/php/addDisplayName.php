<?php
require_once 'db.php';
if (empty($_REQUEST['data'])) {
    $val['masterstatus'] = 'error';
    $val['msg'] = 'no data sent';
} else {
    $data = json_decode($_REQUEST['data'],true);
    if (empty($data['name'])) {
        $val['masterstatus'] = 'error';
        $val['msg'] = 'no data sent';
    } else {
        $val['masterstatus'] = 'success';
        $name = $data['name'];
        $firstName = substr($name, 0,strpos($name, " "));
        $lastName = substr($name, strpos($name, " ")-strlen($name) + 1);
        $name = $lastName.", ".$firstName;
        $sql = "INSERT INTO assignment8 (lastname_firstname) VALUES (?)";
        $args = [];
        $args[] = $name;
        execute($sql,false,$args);
        $sql2 = "Select lastname_firstname FROM assignment8 ORDER BY lastname_firstname";
        $result= execute($sql2);
        $nameList = implode("\n", $result);
        $val['names'] = $nameList;
    }
}
echo(json_encode($val));