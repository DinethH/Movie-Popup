<?php
    
    require_once 'config.php';
    $movieID = $_GET['movieID'];
    $stmt = $db->query("SELECT * FROM movies WHERE ID = '$movieID'");
    $row = $stmt->fetchAll(); 
   
    print (json_encode($row));