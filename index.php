<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableau.css">
    <title>Tableau des tarifs</title>
</head>
<body>

<?php 

include('header.php');

?>

<div class="reservations">
        <table>
            <caption> Réservations </caption>
            <thead>
                <tr>
                    <th colspan="2">Type de réservations</th>
                    <th>Tarifs</th>
                    <th>Informations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="5">Salles</td>
                    <td>Préau</td>
                    <td>15 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Terrain</td>
                    <td>20 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Salle 15</td>
                    <td>10 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Centre Culturel 1</td>
                    <td>20 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Centre Culturel 2</td>
                    <td>20 €</td>
                    <td>ceci est un test</td>
                </tr>

                <tr>
                    <td rowspan="7">Equipements</td>
                    <td>Tables</td>
                    <td>10 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Chaises</td>
                    <td>10 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Hauts parleurs</td>
                    <td>40 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Microphones</td>
                    <td>40 €</td>
                    <td>ceci est un test</td>
                </tr>

                <tr>
                    <td>Chapiteau 3x3</td>
                    <td>20 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Chapiteau 3x4</td>
                    <td>25 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Chapiteau 3x6</td>
                    <td>30 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td rowspan="3">Service</td>
                    <td>Mise en place</td>
                    <td>10 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Nettoyage et rangement</td>
                    <td>10 €</td>
                    <td>ceci est un test</td>
                </tr>
                <tr>
                    <td>Prestation d'un technicien</td>
                    <td>40 €</td>
                    <td>ceci est un test</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>