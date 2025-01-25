<?php
require "database.php";

$insert_to_table = false; 
$result_table = false;
$response = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = trim($_POST['name'] ?? '');
    $lastname = trim($_POST['lastname'] ?? '');
        
    if ($name && $lastname){      
                  
        $insert_query = $db->prepare("INSERT INTO form(name, lastname) VALUES (:name ,:lastname)");
        $insert_query->execute(['name' => $name, 'lastname' => $lastname]);
        $insert_to_table = true;
        $response = "Información guardada correctamente.";
    }
    else{
        $response = "Error: Por favor completa ambos campos.";
    }
}

$table_query = $db->prepare("SELECT * FROM form");
$table_query->execute();
$result_table = true;