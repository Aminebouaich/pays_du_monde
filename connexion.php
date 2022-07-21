<?php

// ------------------------------------------------------------------------------ Connexion à la base de données 'exo_sql' ------------------------------------------------------------------------------------------------------------

// Test de connexion
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=exo_sql;charset=utf8', 'userPays', 'I-4Q@]r!)u(WOrS@'); // attention un mot de passe a été défini pour l'accès à la base de données
}

// Gestion des erreurs
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>