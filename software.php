<?php 
require_once("include/data_inc.php");
const DATA_LOCATION ='datas/';

echo "---------------------GESTION DES LICENCES LOGICIELLES---------------------\n";

echo "\n---------->Liste des employes\n\n"; 
$employees = loadAndDump(DATA_LOCATION."employees.json");

echo "\n---------->Liste des softwares\n\n";    
$softs = loadAndDump(DATA_LOCATION."softs.json");

echo "\n---------->Liste des licences\n\n"; 
$licenses = loadAndDump(DATA_LOCATION."licenses.json");

echo "\n---------->Liste des services\n\n"; 
$services = loadAndDump(DATA_LOCATION."services.json");

arrayDump(getEmployeesByService($employees,'compta'), 'Liste des employées de la compta');
?>