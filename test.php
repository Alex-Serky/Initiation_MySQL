<?php

try
{
    $database = new PDO('mysql:host=localhost; dbname=store', 'alense', '91Ruelescure', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // $database = new PDO('mysql:host=localhost;dbname=store', 'alense', '91Ruelescure');
    // $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die('ERROR: '.$e->getMessage());
}

//Ou peut insérer une nouvelle table dans une base de données:
// $database->query('INSERT INTO customers(first_name, last_name) VALUES (\'Clark\', \'Kent\')');

//On peut aussi utiliser:
$results = $database->query('SELECT first_name, last_name FROM customers');

// $variable = $results->fetchAll(PDO::FETCH_ASSOC);

// var_dump($variable);


// //Ou encore:
while ($row = $results->fetch()) 
    {
        echo "Je m'appelle " . $row['first_name'] . " " . $row['last_name'] . '<br>';
    }
?>