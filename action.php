<?php
include_once "person.php";
function saveData($data){
    $dataJson = json_encode($data);
    file_put_contents("data.json",$dataJson);
}
function loadData(){
    $dataJson = file_get_contents("data.json");
    $dataArr = json_decode($dataJson, true);
    $data = convertToObject($dataArr);
    function sapXep($a,$b){
        return $a->getAge() > $b->getAge();
    }
    usort($data,"sapXep");
    return $data;
}

function convertToObject($arr){
    $persons = array();
    foreach ($arr as $item){
        $person = new Person($item["name"],$item["age"]);
        array_push($persons,$person);
    }
    return $persons;
}