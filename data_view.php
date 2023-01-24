<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'root');
}catch (Exception $e){
    die('Erreur:' .$e->getmessage());
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <table class="data display datatable" id="example">
            <?php
                $request = $bdd->query("SELECT * FROM data");

                echo '<table>
                    <tr>
                        <th>Id</th>
                        <th>Identifiant</th>
                        <th>Password</th>';
    
    
                while ($donnees = $request->fetch()){
                    echo '<tr>
                        <td>' .$donnees['id'].'</td>
                        <td>' .$donnees['identifiant'].'</td>
                        <td>' .$donnees['password'].'</td>
                    </tr>';
                }
                echo '</tr>
                            </table>';
            ?>
    </body>
</html>
