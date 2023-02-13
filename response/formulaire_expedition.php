<?php
    session_start();
    if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./assets/css/expedition.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
        
        <div class="container" id="particulier">
        <header>Remplissez ce formulaire pour expédier votre colis</header>
        
        <form action="expedition_traitement.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Informations Personnelles 1/3</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Numéro de téléphone</label>
                            <input type="number" name="numéroParticulier" placeholder="Entrer votre numéro de téléphone" required>
                        </div>
                        <div class="input-field">
                            <label>Adresse Complète</label>
                            <input type="text" name="adresseParticulier" placeholder="Rue, numéro de maison, arrondissement" required>
                        </div>
                        <div class="input-field">
                            <label>Région</label>
                            <select required name="regionParticulier">
                                <option disabled selected>Veuillez selectionner une région</option>
                                <option name="regionParticulier" value="Extreme-Nord">Extreme-Nord</option>
                                <option name="regionParticulier" value="Nord">Nord</option>
                                <option name="regionParticulier" value="Adamaoua">Adamaoua</option>
                                <option name="regionParticulier" value="Centre">Centre</option>
                                <option name="regionParticulier" value="Ouest">Ouest</option>
                                <option name="regionParticulier" value="Nord Ouest">Nord Ouest</option>
                                <option name="regionParticulier" value="Sud Ouest">Sud Ouest</option>
                                <option name="regionParticulier" value="Sud">Sud</option>
                                <option name="regionParticulier" value="Littoral">Littoral</option>
                                <option name="regionParticulier" value="Est">Est</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Ville/Village</label>
                            <input type="text" name="villeParticulier" title="Dans le cas d'un village, le colis sera livré à la chefferie" placeholder="Entrer une ville ou un village" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Détails sur la citoyenneté</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Numéro de la pièce</label>
                            <input type="number" name="idnumParticulier" placeholder="Entrer Numéro de la pièce" required>
                        </div>
                        <div class="input-field">
                            <label>Date de délivrance</label>
                            <input type="date" name="datedelivParticulier" required>
                        </div>

                        <div class="input-field">
                            <label>Date d'Expiration</label>
                            <input type="date" name="dateexpParticulier" required>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Avancer</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Informations sur le récepteur 2/3</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Adresse</label>
                            <input type="text" name="adresseRecepteur" placeholder="Rue, numéro de maison, arrondissement">
                        </div>

                        <div class="input-field">
                            <label>Région</label>
                            <select required name="regionRecepteur">Veuillez selectionner une région</option>
                                <option name="regionRecepteur" value="Extreme-Nord">Extreme-Nord</option>
                                <option name="regionRecepteur" value="Nord">Nord</option>
                                <option name="regionRecepteur" value="Adamaoua">Adamaoua</option>
                                <option name="regionRecepteur" value="Centre">Centre</option>
                                <option name="regionRecepteur" value="Ouest">Ouest</option>
                                <option name="regionRecepteur" value="Nord Ouest">Nord Ouest</option>
                                <option name="regionRecepteur" value="Sud Ouest">Sud Ouest</option>
                                <option name="regionRecepteur" value="Sud">Sud</option>
                                <option name="regionRecepteur" value="Littoral">Littoral</option>
                                <option name="regionRecepteur" value="Est">Est</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Ville/Village</label>
                            <input type="text" name="villeRecepteur" title="Dans le cas d'un village, le colis sera livré à la chefferie" placeholder="Entrer une ville ou un village" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Identité Du Récepteur</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nom Complet</label>
                            <input type="text" name="nomRecepteur" placeholder="Entrer son nom dans l'ordre de l'acte de naissance" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="emailRecepteur" placeholder="Entrer votre email" required>
                        </div>

                        <div class="input-field">
                            <label>Numéro de téléphone</label>
                            <input type="number" name="numéroRecepteur" placeholder="Entrer votre numéro de téléphone" required>
                        </div>

                        <div class="details ID">
                            <span class="title">Détails sur la citoyenneté</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>Type de Pièce d'identité</label>
                                    <select required name="idRecepteur">
                                        <option disabled selected>Veuillez selectionner un type</option>
                                        <option name="idRecepteur" value="CNI">Carte Nationale d'identité</option>
                                        <option name="idRecepteur" value="Passeport">Passeport</option>
                                        <option name="idRecepteur" value="Permis de conduire">Permis de Conduire</option>
                                    </select>
                                </div>

                                <div class="input-field">
                                    <label>Numéro de la pièce</label>
                                    <input type="number" name="idnumRecepteur" placeholder="Entrer Numéro de la pièce" required>
                                </div>
                                <div class="input-field">
                                    <label>Date de délivrance</label>
                                    <input type="date" name="datedelivRecepteur" required>
                                </div>
                        </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Retour</span>
                        </div>
                        
                        <input type="submit" name="submit" class="submit"/>
                    </div>
                </div> 
            </div>
        </form>
    </div>
    <script src="./assets/js/expedition.js"></script>
</body>
</html>
<?php
}
else{
    header("location:./authentification.php");
}
?>