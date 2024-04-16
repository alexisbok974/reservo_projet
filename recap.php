<?php
if(isset($_POST["valider"])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numero = $_POST['numero'];
    $mail = $_POST['mail'];
    $date = $_POST['date'];
    $heureDebut = $_POST['heureDebut'];
    $heureFin = $_POST['heureFin'];
    
    if(isset($_POST['preau'])){
        $preau = $_POST['preau'];
    }else{
        $preau = "Rien choisi";
    }
    if(isset($_POST['terrain'])){
        $terrain = $_POST['terrain'];
    }else{
        $terrain = "Rien choisi";
    }
    if(isset($_POST['salle15'])){
        $salle15 = $_POST['salle15'];
    }else{
        $salle15 = "Rien choisi";
    }
    if(isset($_POST['cc1'])){
        $cc1 = $_POST['cc1'];
    }else{
        $cc1 = "Rien choisi";
    }
    if(isset($_POST['cc2'])){
        $cc2 = $_POST['cc2'];
    }else{
        $cc2 = "Rien choisi";
    }
    if(isset($_POST['table']) && is_numeric($_POST['table'])){
        $nbrTable = $_POST['table'];
    }else{
        $nbrTable = 0;
    }
    if(isset($_POST['chaise']) && is_numeric($_POST['chaise'])){
        $nbrChaise = $_POST['chaise'];
    }else{
        $nbrChaise = 0;
    }
    if(isset($_POST['haut-parleurs']) && is_numeric($_POST['haut-parleurs'])){
        $nbrHP = $_POST['haut-parleurs'];
    }else{
        $nbrHP = 0;
    }
    if(isset($_POST['microphone']) && is_numeric($_POST['microphone'])){
        $nbrMicrophones = $_POST['microphone'];
    }else{
        $nbrMicrophones = 0;
    }
    if(isset($_POST['chapiteau3x3']) && is_numeric($_POST['chapiteau3x3'])){
        $nbrChap3x3 = $_POST['chapiteau3x3'];
    }else{
        $nbrChap3x3 = 0;
    }
    if(isset($_POST['chapiteau3x4']) && is_numeric($_POST['chapiteau3x4'])){
        $nbrChap3x4 = $_POST['chapiteau3x4'];
    }else{
        $nbrChap3x4 = 0;
    }
    if(isset($_POST['chapiteau3x6']) && is_numeric($_POST['chapiteau3x6'])){
        $nbrChap3x6 = $_POST['chapiteau3x6'];
    }else{
        $nbrChap3x6 = 0;
    }
    if(isset($_POST['technicien'])){
        $prestation = "oui";
    }else{
        $prestation = "non";
    }
    if(isset($_POST['miseenplace'])){
        $miseEnPlace = "oui";
    }else{
        $miseEnPlace = "non";
    }
    if(isset($_POST['nettoyage'])){
        $nettoyage = "oui";
    }else{
        $nettoyage = "non";
    }

    session_start();


    if(!empty($nom) && !empty($prenom) && !empty($numero) && !empty($mail) && !empty($date) && !empty($heureDebut) && !empty($heureFin)){

        $_SESSION['nom']            = $nom;
        $_SESSION['prenom']         = $prenom;
        $_SESSION['numero']         = $numero;
        $_SESSION['mail']           = $mail;
        $_SESSION['date']           = $date;
        $_SESSION['heureDebut']     = $heureDebut;
        $_SESSION['heureFin']       = $heureFin;
        $_SESSION['preau']          = $preau;
        $_SESSION['terrain']        = $terrain;
        $_SESSION['salle15']        = $salle15;
        $_SESSION['cc1']            = $cc1;
        $_SESSION['cc2']            = $cc2;
        $_SESSION['table']          = $nbrTable;
        $_SESSION['chaise']         = $nbrChaise;
        $_SESSION['haut-parleurs']  = $nbrHP;
        $_SESSION['microphone']     = $nbrMicrophones;
        $_SESSION['chapiteau3x3']   = $nbrChap3x3;
        $_SESSION['chapiteau3x4']   = $nbrChap3x4;
        $_SESSION['chapiteau3x6']   = $nbrChap3x6;
        $_SESSION['technicien']     = $prestation;
        $_SESSION['miseenplace']    = $miseEnPlace;
        $_SESSION['nettoyage']      = $nettoyage;

        header("location:traitement_reservation.php");
        exit();
    }else{
        echo "remplir les champs obligatoires";
    }

}else{
    echo "null";
}


?>