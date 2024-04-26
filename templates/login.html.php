<form action="" method="POST">
    <input type="hidden" name="layout" value="promos">
    <input type="hidden" name="connexion">
    <div class="container-login">
        <div class="login-logo mb-15"></div>
        <div class="card-loging">
            <style>
                .form-control-error.alert-danger{
                    color: red;
                    background-color:pink;
                    padding:30px;
                    padding-left:45px;
                }
            </style>
            <?php
                if($goodCredentials == false){
                    echo "<div class='h-16 mb-8'>
                        <input  type='text' class='form-control-error alert-danger' value='Email ou mot de passe ou les deux, incorrect' readonly>
                     </div>";
                }
            ?>
            <div class="h-16" style="margin-bottom: 60px">
                <label>Adresse mail <span class="asterisk">*</span></label>
                <!-- <p class="asterisk-email">*</p> -->
                <input type="text" name="email" class="form-control-email mt-2" placeholder="Entrer adresse mail" value="<?=isset($_POST["email"]) ? $_POST["email"] : '' ?>">
            </div>
            <?php
                if($emptyEmail){
                    echo "<div style='color: red;background-color:pink; padding:10px;border-radius:5px; margin-top: -20px; margin-bottom: 17px;'>Veuillez saisir une adresse mail !</div>";
                }
            ?>
            <?php
                if(!$emailIsValide){
                    echo "<div style='color: red;background-color:pink; padding:10px;border-radius:5px; margin-top: -20px; margin-bottom: 17px;'>Adresse mail non valide, réessayez ! :</div>";
                }
            ?>
            <div class="h-16 password-eye">
                <label>Mot de passe<span class="asterisk">*</span></label>
                <!-- <p class="asterisk-password">*</p> -->
                <input type="password" id="password" name="password" class="form-control-email mt-2" placeholder="Entrer mot de passe" value="<?=isset($_POST["password"]) ? $_POST["password"] : '' ?>">
                <!-- <a style="cursor: pointer" class="eye-slash" onclick="showOrHidePassword()"><i class="fas fa-eye" style="font-size: 1.7rem;"></i></a> -->
            </div>
            <?php
                if($emptyPassword){
                    echo "<div style='color: red;background-color:pink; padding:10px;border-radius:5px; margin-top: 40px; margin-bottom: -55px;'>Veuillez saisir un mot de passe !</div>";
                }
            ?>
        </div>

        <div class="flex-login">
            <div>
                <input type="checkbox">
                <label for="">Remember me</label>
            </div>
            <div>
                <a href="#">Mot de passe oublié ?</a>
            </div>
        </div>
        <div class="btn-login">
            <button class="btn btn-success log" type="submit">Log in</button>
        </div>
    </div>
</form>

<?php
// la logique pour réinitialiser les champs si les informations sont incorrectes
if($goodCredentials == false || $emptyEmail || !$emailIsValide || $emptyPassword) {
    echo "<script>
            document.querySelector('input[name=\"email\"]').value = '';
            document.querySelector('input[name=\"password\"]').value = '';
          </script>";
}
?>
