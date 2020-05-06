<?php
//* mvc complete
require_once('model.php');

$name='';
$data = null;
if (!empty($_REQUEST['viewid'])) {
    $row = MyModel::getModel()->getDataForId($_REQUEST['viewid']);
    $personID = $row['personID'];
    $person_name = $row['person_name'];
    $provider_number = $row['provider_number'];
    $locationID = $row['locationID'];
    require_once('detailsView.php');
    exit(1);
}
if (!empty($_REQUEST['editid'])) {
    $row = MyModel::getModel()->getDataForId($_REQUEST['editid']);
    $personID = $row['personID'];
    $_SESSION['personID'] = $personID;
    $person_name = $row['person_name'];
    $provider_number = $row['provider_number'];
    $locationID = $row['locationID'];
    require_once('editView.php');
    exit(1); 
}
if(isset($_POST['save'])){
    $personID=$_SESSION['personID'];
    print_r($personID);
    $person_name = $_POST['person_name'];
    print_r($person_name);
    $provider_number = $_POST['provider_number'];
    print_r($provider_number);
    $locationID = $_POST['locationID'];
    print_r($locationID);
    MyModel::getModel()->editPerson($personID, $person_name, $provider_number, $locationID);
    session_unset($personID);
    $name = MyModel::getModel()->getNameFromSession();
    $data = MyModel::getModel()->getDataForName($name);
}


if (!empty($_REQUEST['deleteid'])) {
    // call a function in the model that deletes the record
    $personID = $_REQUEST['deleteid'];
    MyModel::getModel()->deletePerson($personID);
    $name = MyModel::getModel()->getNameFromSession();
    $data = MyModel::getModel()->getDataForName($name);

}
if (!empty($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    $data = MyModel::getModel()->getDataForName($name);
} else {
    $name = MyModel::getModel()->getNameFromSession();
    $data = MyModel::getModel()->getDataFromSession();
}
require_once('searchView.php');
