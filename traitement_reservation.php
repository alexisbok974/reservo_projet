
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ticket.css">
    <title>Ticket de réservation</title>
</head>
<body>
    

    <?php
    
    session_start();

    include('header.php');

    $prixPreau = 15;
    $prixTerrain = 20;
    $prixSalle15 = 10;
    $prixCentreCulturel1 = 20;
    $prixCentreCulturel2 = 20;
    $prixTable = 10;
    $prixChaise = 10;
    $prixHautParleur = 40;
    $prixMicrophones = 40;
    $prixPrestation = 40;
    $prixChapiteau3x3 = 20;
    $prixChapiteau3x4 = 25;
    $prixChapiteau3x6 = 30;
    $prixPrestataire = 20;
    $prixNettoyage = 20;
    $prixMiseEnPlace = 20;

    $prixTotalTable = $prixTable * $_SESSION['table'];
    $prixTotalChaise = $prixChaise * $_SESSION['chaise'];
    $prixTotalHP = $prixHautParleur * $_SESSION['haut-parleurs'];
    $prixTotalMicrophones = $prixMicrophones * $_SESSION['microphone'];
    $prixTotalChap3x3 = $prixChapiteau3x3 * $_SESSION['chapiteau3x3'];
    $prixTotalChap3x4 = $prixChapiteau3x4 * $_SESSION['chapiteau3x4'];
    $prixTotalChap3x6 = $prixChapiteau3x6 * $_SESSION['chapiteau3x6'];

    $resFinal = $prixTotalTable+$prixTotalChaise+$prixTotalHP+$prixTotalMicrophones+$prixTotalChap3x3+$prixTotalChap3x4+$prixTotalChap3x6;

    if($_SESSION['technicien'] == "oui"){
        $verifPrestataire = "oui";
        $resFinal += $prixPrestataire;
    }else{
        $verifPrestataire = "non";
    }
    if($_SESSION['miseenplace'] == "oui"){
        $verifNettoyage = "oui";
        $resFinal += $prixNettoyage;
    }else{
        $verifNettoyage = "non";
    }
    if($_SESSION['nettoyage'] == "oui"){
        $verifMiseEnPlace = "oui";
        $resFinal += $prixMiseEnPlace;
    }else{
        $verifMiseEnPlace = "non";
    }


    ?>
    <div class="principale">
        <div>
            <h2>Ticket de réservation</h2>
        </div>
        <div class="informations">
            <div class="info-personne">
                <h3>Vos informations</h3>
                <?php echo "<br> Nom : " . $_SESSION['nom']; ?>
                <?php echo "<br> Prenom : " . $_SESSION['prenom']; ?>
                <?php echo "<br> Vous avez reservez pour la date suivante : " . $_SESSION['date']; ?>
                <?php echo "<br> L'heure de début est : " . $_SESSION['heureDebut']; ?>
                <?php echo "<br> L'heure de fin est : " .$_SESSION['heureFin']; ?>
            </div>
            <div class="info-reservation">
                <h3>Emplacement(s) choisi(s) :</h3>
                <?php echo "Vous avez demandez le/les emplacement(s) suivant(s) : <br>" 
                . $_SESSION['preau'] . "<br>" 
                . $_SESSION['terrain'] . "<br>" 
                . $_SESSION['salle15'] . "<br>" 
                . $_SESSION['cc1'] . "<br>" 
                . $_SESSION['cc2'] . "<br>"?>
                <h3>Equipement(s) choisi(s) :</h3>
                <?php echo "Le nombre de table(s) : " . $_SESSION['table']; ?>
                <?php echo "Le nombre de chaise(s) : " . $_SESSION['chaise']; ?>
                <?php echo "<br>Le nombre de Hauts parleur(s) : " . $_SESSION['haut-parleurs']; ?> 
                <?php echo "<br>Le nombre de microphone(s) : " . $_SESSION['microphone']; ?> 
                <?php echo "<br>Le nombre de Chapiteau en 3 par 3 : " . $_SESSION['chapiteau3x3']; ?> 
                <?php echo "<br>Le nombre de Chapiteau en 3 par 4 : " . $_SESSION['chapiteau3x4']; ?>
                <?php echo "<br>Le nombre de Chapiteau en 3 par 6 : " . $_SESSION['chapiteau3x6']; ?> 
                <h3>Service(s) demandé(s) :</h3>
                <?php echo "Avez-vous demandez un prestataire ? " . $verifPrestataire; ?> 
                <?php echo "<br>Avez-vous demandez la mise en place ? " . $verifMiseEnPlace; ?>
                <?php echo "<br>Avez-vous demandez le nettoyage et le rangement ? " . $verifNettoyage; ?> 
                <?php echo "<br><br>Pour un prix total de : " . $resFinal . " euros<br><br>"; ?>
            </div>
        </div>

        <div class="validation">
                <form action="" method="post">
                    <input type="submit" value="Mettre dans le panier" name="Confirmer" id="valider">
                </form>

            <?php  

            if(isset($_POST['Confirmer'])){
                $ServerName = "localhost";
                $login = "btssio";
                $password = "btssio";
                $db_name = "reservo";


                try{
                    $cnx = new PDO("mysql:host=$ServerName;dbname=$db_name", $login, $password);
                    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Réservation effectuée !";
                }catch(PDOException $e){
                    echo "Réservation refusée : " . $e->getMessage();
                }

                $sqlAdherent = "INSERT INTO Adherent(nom, prenom, numero, mail) VALUES (:nom, :prenom, :numero, :mail)";

                $stmtAdherent=$cnx->prepare($sqlAdherent);
                $stmtAdherent->bindParam(':nom', $_SESSION['nom']);
                $stmtAdherent->bindParam(':prenom', $_SESSION['prenom']);
                $stmtAdherent->bindParam(':numero', $_SESSION['numero']);
                $stmtAdherent->bindParam(':mail', $_SESSION['mail']);
                $stmtAdherent->execute();
                $idAdherent = $cnx->lastInsertId();



                $sqlSalles = "INSERT INTO Salles(Preau, Terrain, Salle15, CC1, CC2) VALUES (:Preau, :Terrain, :Salle15, :CC1, :CC2)";

                $stmtSalles=$cnx->prepare($sqlSalles);
                $stmtSalles->bindParam(':Preau', $_SESSION['preau']);
                $stmtSalles->bindParam(':Terrain', $_SESSION['terrain']);
                $stmtSalles->bindParam(':Salle15', $_SESSION['salle15']);
                $stmtSalles->bindParam(':CC1', $_SESSION['cc1']);
                $stmtSalles->bindParam(':CC2', $_SESSION['cc2']);
                $stmtSalles->execute();
                $idSalle = $cnx->lastInsertId();


                $sqlEquipements = "INSERT INTO Equipements(`table`, chaise, hautParleur, microphone, chapiteau33, chapiteau34, chapiteau36) VALUES (:table, :chaise, :hautParleur, :microphone, :chapiteau33, :chapiteau34, :chapiteau36)";

                $stmtEquipements = $cnx->prepare($sqlEquipements);
                $stmtEquipements->bindParam(':table', $_SESSION['table']);
                $stmtEquipements->bindParam(':chaise', $_SESSION['chaise']);
                $stmtEquipements->bindParam(':hautParleur', $_SESSION['haut-parleurs']);
                $stmtEquipements->bindParam(':microphone', $_SESSION['microphone']);
                $stmtEquipements->bindParam(':chapiteau33', $_SESSION['chapiteau3x3']);
                $stmtEquipements->bindParam(':chapiteau34', $_SESSION['chapiteau3x4']);
                $stmtEquipements->bindParam(':chapiteau36', $_SESSION['chapiteau3x6']);
                $stmtEquipements->execute();
                $idEquipement = $cnx->lastInsertId();

                $sqlServices = "INSERT INTO Services(mep, nettoyage, sonorisation) VALUES (:mep, :nettoyage, :sonorisation)";

                $stmtServices=$cnx->prepare($sqlServices);
                $stmtServices->bindParam(':mep', $verifMiseEnPlace);
                $stmtServices->bindParam(':nettoyage', $verifNettoyage);
                $stmtServices->bindParam(':sonorisation', $verifPrestataire);
                $stmtServices->execute();
                $idService = $cnx->lastInsertId();



                $sqlReservation = "INSERT INTO Reservation (idAdherent, idSalle, idEquipement, idService, heureDebut, heureFin, `date`) VALUES (:idAdherent, :idSalle, :idEquipement, :idService, :heureDebut, :heureFin, :date)";

                $stmtReservation=$cnx->prepare($sqlReservation);
                $stmtReservation->bindParam(':idAdherent', $idAdherent);
                $stmtReservation->bindParam(':idSalle', $idSalle);
                $stmtReservation->bindParam(':idEquipement', $idEquipement);
                $stmtReservation->bindParam(':idService', $idService);
                $stmtReservation->bindParam(':heureDebut', $_SESSION['heureDebut']);
                $stmtReservation->bindParam(':heureFin', $_SESSION['heureFin']);
                $stmtReservation->bindParam(':date', $_SESSION['date']);
                
                $stmtReservation->execute();



            }




            ?>
            
        </div>

    </div>

</body>
</html>
