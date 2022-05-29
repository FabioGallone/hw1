<?php

require_once "auth.php";
$error= array();
if(!empty($_POST["nome"]) && !empty($_POST["cognome"])  && !empty($_POST["email"]) && !empty($_POST["username"]) && !empty($_POST["password"])){
       

   
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    


    if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $_POST["username"])){
        $error[] ="Username non valido";
    }  
        else {
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $query = "SELECT username FROM utenti WHERE username = '$username'";
        $res = mysqli_query($conn, $query);


        if (mysqli_num_rows($res)>0){
            $error[] = "Username già esistente";

        }


    }

    if(strlen($_POST["password"]) < 8){
        $error[] = "Caratteri non sufficienti";
    }

    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $error[]= "email non valida";
    }

        else {
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $query = "SELECT email FROM utenti WHERE email = '$email'";
            $res = mysqli_query($conn, $query);
    
    
            if (mysqli_num_rows($res)>0){
                $error[] = "Email già esistente";
    
            }

    }

    if(count($error) == 0){
        $name = mysqli_real_escape_string($conn, $_POST["nome"]);
        
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        
        $cognome = mysqli_real_escape_string($conn, $_POST["cognome"]);

        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO utenti(nome, cognome, email, username, password) VALUES('$name', 
        '$cognome', '$email', '$username', '$passwordhash')";

        if(mysqli_query($conn, $query))  {
         
            $_SESSION["username"] = $_POST["username"];
          
            header("Location: home.php");
            mysqli_free_result($res);
            mysqli_close($conn);
            exit;
        } else {
            $error[] = "Qualcosa è andato storto nel connettersi al database";
        }
    } 


} else if(isset($_POST["nome"]) || isset($_POST["cognome"])  || isset($_POST["email"]) || isset($_POST["username"]) || isset($_POST["password"])){
    $error[]= "Assicurati di compilare correttamente tutti i campi";
}




?>


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Musclegym_ABBONAMENTO</title>

        <link rel='stylesheet' href='style/reg.css'>
        <link rel='stylesheet' href='style/condiviso.css'>
        <script src="scripts/signup.js" defer="true"></script>
        <script src="scripts/mobile.js" defer="true"></script>
      
    </head>


    <body>
        <header>
         

            <nav>
               
                <div class="links">
                    <img src="image/logo.png">
                    <a href='home.php'>HOME</a>
                    <a href='shop.php'>SHOP</a>
                    <a href='carrello.php'class="three">CARRELLO</a>
                    <a href='login.php' class="button">LOGIN</a>
                  
                </div>
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>


            <!--<div id="titolo">
                <h1>
                    <strong>REGISTRAZIONE</strong> 
                </h1>
            </div>-->
    
        </header>

        <section>
         
            <form name='compilazione' method="POST">
                   <h1>REGISTRAZIONE</h1>
            <h3>REGISTRATI QUI COMPILANDO GLI APPOSITI MODULI CHE LEGGI QUI SOTTO</h3>

            <?php       
           
                if(count($error)!=0)
                for($i=0; $i<count($error); $i++)
                echo "<h3 class='message_error'>$error[$i]</h3>";
               
            ?>

                <label class="nome">Nome <input type="text" name="nome"
                <?php
                     if(isset($_POST["nome"]))
                     {echo "value=".$_POST["nome"];}
                ?>></label>
                <span class="nome">Nome non valido</span>

                <label class="cognome">Cognome<input type="text" name="cognome" 
                <?php
                     if(isset($_POST["cognome"]))
                     {echo "value=".$_POST["cognome"];}
                ?>></label>
                <span class="cognome">Cognome non valido</span>

                <label class="username">Username <input type="text" name="username"
                <?php
                     if(isset($_POST["username"]))
                     {echo "value=".$_POST["username"];}
                ?>></label>
                <span class="username">Username non valido</span>

                <label class="email">E-mail <input type="test" name="email"
                <?php
                     if(isset($_POST["email"]))
                     {echo "value=".$_POST["email"];}
                ?>></label>
                <span class="email">E-mail non valida</span>

                <label class="password">Password <input type="password" name="password"></label>
                <span class="password">Inserisci una password di almeno 8 caratteri</span>
                
                <label class="bottone">&nbsp;<input type="submit" name="login"></label>
        
            </form>

        </section>
        

        <div id="epilogo">

            <div class="links">
                <h2>PAGINE</h2>
                <a onclick="window.location='home.php'">HOME</a>
                    <a onclick="window.location='shop.html'">SHOP</a>
                    <a class="three">CARRELLO</a>
                    <a class="button">LOGIN</a>
              
            </div>


      
           
              
         
    
    
            <div>
                <h2>
                    Dove trovarci
                </h2>
                <p>
                    Via Boccaccio 39,<br> Paternò, Sicilia, Italy
                </p>
                <h2>
                    CONTATTACI
                </h2>
                <p>
                    Tel. 3476622157
                </p>
            </div>

            <div>
                <h2>
                    Orari di apertura
                </h2>
                <ol>
                    <li>Lunedì: 9:00 - 22:00</li>
                    <li>Martedì: 9:00 - 22:00</li>
                    <li>Mercoledì: 9:00 - 22:00</li>
                    <li>Giovedì: 9:00 - 22:00</li>
                    <li>Venerdì: 9:00 - 22:00</li>
                    <li>Sabato: 9:00 - 17:00</li>
                    <li>Domenica: CHIUSO</li>
                </ol>



            </div>

            <div>
                <img src="image/logo_bianco.png">
                <p><strong>Musclegym</strong> è una palestra di ultima generazione specializzata nel fitness.</p>
                <p>Lavoriamo con passione per regalare ad ogni nostro atleta qualità e innovazione.</p>
            </div>
         
    
    
    
        </div>

        <footer>

            <p>
                Powered by Fabio Gallone 1000001752</br></br>

                Seguimi sui social:
            </p>

            <div id="footer_buttons">
            <a href='https://www.instagram.com/fabio_gallone/'>Instagram</a>
            </div>
    




        </footer>
    </body>