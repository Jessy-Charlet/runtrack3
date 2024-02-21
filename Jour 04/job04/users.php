<?php 
  try { 
    $bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'user', 'user'); 
  } 
  catch (Exception $e) { 
    die('Erreur : ' . $e->getMessage()); 
  } 
  $query = $bdd->query("Select * from utilisateurs"); 
  $users = array(); 
  while ($users = $query->fetch()) 
    array_push($users, array("id" => $users["id"], 
                              "nom" => $users["nom"], 
                              "prenom" => $users["prenom"], 
                              "email" => $users["email"])); 
  print(json_encode($users, JSON_PRETTY_PRINT)); 
?>