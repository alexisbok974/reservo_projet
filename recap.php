<?php
if(isset($_POST["valider"])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numero = $_POST['numero'];
    $mail = $_POST['mail'];
    $date = $_POST['date'];
    $heureDebut = $_POST['heureDebut'];
    $heureFin = $_POST['heureFin'];
    if($_POST['preau']){
        $preau = $_POST['preau'];
    }else{
        $preau = "Rien choisi";
    }
    if($_POST['terrain']){
        $terrain = $_POST['terrain'];
    }else{
        $terrain = "Rien choisi";
    }
    if($_POST['salle15']){
        $salle15 = $_POST['salle15'];
    }else{
        $salle15 = "Rien choisi";
    }
    if($_POST['cc1']){
        $cc1 = $_POST['cc1'];
    }else{
        $cc1 = "Rien choisi";
    }
    if($_POST['cc2']){
        $cc2 = $_POST['cc2'];
    }else{
        $cc2 = "Rien choisi";
    }
    if($_POST['table']){
        $nbrTable = $_POST['table'];
    }else{
        $nbrTable = "0";
    }
    if($_POST['chaise']){
        $nbrChaise = $_POST['chaise'];
    }else{
        $nbrChaise = "0";
    }
    if($_POST['haut-parleurs']){
        $nbrHP = $_POST['haut-parleurs'];
    }else{
        $nbrHP = "0";
    }
    if($_POST['microphone']){
        $nbrMicrophones = $_POST['microphone'];
    }else{
        $nbrMicrophones = "0";
    }
    if($_POST['chapiteau3x3']){
        $nbrChap3x3 = $_POST['chapiteau3x3'];
    }else{
        $nbrChap3x3 = "0";
    }
    if($_POST['chapiteau3x4']){
        $nbrChap3x4 = $_POST['chapiteau3x4'];
    }else{
        $nbrChap3x4 = "0";
    }
    if($_POST['chapiteau3x6']){
        $nbrChap3x6 = $_POST['chapiteau3x6'];
    }else{
        $nbrChap3x6 = "0";
    }
    if($_POST['technicien']){
        $prestation = $_POST['technicien'];
    }else{
        $prestation = "non";
    }
    if($_POST['nettoyage']){
        $nettoyage = $_POST['nettoyage'];
    }else{
        $nettoyage = "non";
    }
    if($_POST['miseenplace']){
        $miseEnPlace = $_POST['miseenplace'];
    }else{
        $miseEnPlace = "non";
    }

    if(!empty($nom) && !empty($prenom) && !empty($numero) && !empty($mail) && !empty($date) && !empty($heureDebut) && !empty($heureFin)){
        header("location:traitement_reservation.php?nom=".$nom."&&prenom=".$prenom."&&numero=".$numero."&&mail=".$mail."&&date=".$date."&&heureDebut=".$heureDebut."&&heureFin=".$heureFin."&&preau=".$preau."&&terrain=".$terrain."&&salle15=".$salle15."&&cc1=".$cc1."&&cc2=".$cc2."&&table=".$nbrTable."&&chaise=".$nbrChaise."&&haut-parleurs=".$nbrHP."&&microphone=".$nbrMicrophones."&&chapiteau3x3=".$nbrChap3x3."&&chapiteau3x4=".$nbrChap3x4."&&chapiteau3x6=".$nbrChap3x6."&&technicien=".$prestation."&&nettoyage=".$nettoyage."&&miseenplace=".$miseEnPlace);
    }else{
        echo "remplir les champs obligatoires";
    }

}else{
    echo "null";
}




?>