<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="liste_reservations.css">
    <title>Document</title>
</head>
<body>
    

<?php

include('header.php');

?>

<div class="admin-reservation">


    <table>
        <caption>Liste des réservations</caption>
        <thead>
            <tr>
                <th>ID Réservation</th>
                <th>ID Adhérent</th>
                <th>ID Salles</th>
                <th>ID Equipements</th>
                <th>ID Services</th>
                <th>Heure de Début</th>
                <th>Heure de Fin</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php 


            $ServerName = "localhost";
            $login = "btssio";
            $password = "btssio";
            $db_name = "reservo";


            try{
                $cnx = new PDO("mysql:host=$ServerName;dbname=$db_name", $login, $password);
                $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "Connexion échouée : " . $e->getMessage();
            }

            $sql = "SELECT * FROM reservation";
            $stmt = $cnx->prepare($sql);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo    "<tr>
                            <th>" . htmlspecialchars($row["idReservation"]) . "</th>
                            <th>" . htmlspecialchars($row["idAdherent"]) . "</th>
                            <th>" . htmlspecialchars($row["idSalle"]) . "</th>
                            <th>" . htmlspecialchars($row["idEquipement"]) . "</th>
                            <th>" . htmlspecialchars($row["idService"]) . "</th>
                            <th>" . htmlspecialchars($row["heureDebut"]) . "</th>
                            <th>" . htmlspecialchars($row["heureFin"]) . "</th>
                            <th>" . htmlspecialchars($row["date"]) . "</th>
                        </tr>";
                
            }

            
            ?>
        </tbody>
    </table>
</div>



</body>
</html>