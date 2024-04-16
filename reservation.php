<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservo</title>
    <link rel="stylesheet" href="reservation.css">
</head>
<body>

<?php 

include('header.php');

?>


    <div class="divformulaire">
        <div class="info">
            <div class="divcoord">
                        <form action="recap.php" class="formulaire" method="post">
                            <label for="Nom">Nom</label>
                            <input type="text" name="nom">
                            <label for="Prenom">Prénom</label>
                            <input type="text" name="prenom">
                            <label for="num">Numéro de téléphone</label>
                            <input type="tel" name="numero">
                            <label for="mail">Adresse mail</label>
                            <input type="mail" name="mail">
                    </div>

                    <div class="divres">
                        <label for="date">Date de réservation :</label>
                        <input type="date" id="heure" name="date"><br>
                        <label for="heureDebut">Heure de début :</label>
                        <input type="time" id="heure" name="heureDebut"><br>
                        <label for="heureFin">Heure de fin :</label>
                        <input type="time" id="heure" name="heureFin"><br>
                        <label for="emplacement">Emplacement à réserver :</label><br>
                        <input type="checkbox" name="preau" class="choix" value="Préau">Préau</input><br>
                        <input type="checkbox" name="terrain" class="choix" value="Terrain">Terrain</input><br>
                        <input type="checkbox" name="salle15" class="choix" value="Salle 15">Salle 15</input><br>
                        <input type="checkbox" name="cc1" class="choix" value="Centre culturel 1">Centre Culturel 1</input><br>
                        <input type="checkbox" name="cc2" class="choix" value="Centre culturel 2">Centre Culturel 2</input><br>
                    </div>

                    <div class="divTypeRes">
                        <label for="">Tables :</label>
                        <input type="number" name="table" id="">
                        <label for="">Chaises :</label>
                        <input type="number" name="chaise" id="">
                        <label for="">Hauts parleurs :</label>
                        <input type="number" name="haut-parleurs" id="">
                        <label for="">Microphones :</label>
                        <input type="number" name="microphone" id="">
                        <label for="">Chapiteau 3x3 :</label>
                        <input type="number" name="chapiteau3x3" id="">
                        <label for="">Chapiteau 3x4 :</label>
                        <input type="number" name="chapiteau3x4" id="">
                        <label for="">Chapiteau 3x6 :</label>
                        <input type="number" name="chapiteau3x6" id="">
                        <label for="">Prestation d'un technicien :</label>
                        <input type="checkbox" name="technicien" id="">
                        <label for="">Mise en place :</label>
                        <input type="checkbox" name="miseenplace" id="">
                        <label for="">Nettoyage et rangement :</label>
                        <input type="checkbox" name="nettoyage" id="">
                    </div>
        </div>

        <div class="validation">
            <input type="submit" value="Valider" name="valider">
        </div>

            </form>
    </div>



</body>
</html>

