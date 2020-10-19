<?php
// FONCTIONS
/**
 *Ouvre un fichier JSON et retourne un tableau 
 */
function jsonFileToArray(string $filename){
    $str = file_get_contents($filename);
    return json_decode($str,true);
}

function arrayDump(array $values ,?string $title=null):void{
    if($title!=null){
        echo "\$title\n";
        echo "----------------\n";
    }
    foreach($values as $element){
        foreach($element as $name=>$value){
            echo "$name :  $value\n\t";
        }
        echo "\n";
    }
}

function loadAndDump(string $filename):array{
    $values = jsonFileToArray($filename);
    arrayDump($values, basename ($filename));
    return $values;
}

function getEmployeesByService(array $employees, string $service) {
    var_dump($employees);
    return array_filter($employees, function($emp)use($service) {
        return $emp['service']==$service;}
    );
}