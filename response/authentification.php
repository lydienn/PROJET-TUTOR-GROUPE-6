<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./assets/css/authentification.css">
         
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Se Connecter</span>

                <form action="login.php">
                    <div class="input-field">
                        <input type="text" placeholder="Entrer votre email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Entrer votre mot de passe" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Se souvenir de moi</label>
                        </div>
                        
                        <a href="#" class="text">Mot de passe oublié ?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Se Connecter">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Pas de compte?
                        <a href="#" class="text signup-link">S'inscrire maintenant</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Inscription</span>

                <form action="registration.php">
                    <div class="input-field">
                        <input type="text" placeholder="Entrer votre nom" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Entrer votre email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Créer votre mot de Passe" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirmer votre mot de Passe" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">J'accepte les termes et conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="S'inscrire">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Déjà inscrit?
                        <a href="#" class="text login-link">Se Connecter</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/authentification.js"></script>

</body>
</html>