<?php
include 'auth.php';
$error=null;
if(VerificaConnessioneUtente()){
    header("Location: home.php");
    exit;
}

if(!empty($_POST["email"]) && !empty($_POST["password"]))
{

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $password = mysqli_real_escape_string($conn, $_POST['password']);
    

    $query = "SELECT username, password FROM utenti WHERE email ='$email'";
  


    $res= mysqli_query($conn, $query) or die(mysqli_error($conn));
    $prova=$res;
    


    if(mysqli_num_rows($res)>0){

        $row = mysqli_fetch_assoc($res);


        if(password_verify($password, $row["password"])){
        $_SESSION["username"] = $row["username"];
        header("Location: home.php");
        mysqli_free_result($res);
        mysqli_close($conn);
        exit;
        
        }
        else{
            $error= "Email e/o password errate";
        }
    }
    else{
    $error= "Email e/o password errate";
    }

}
  else if (isset($_POST["email"]) || isset($_POST["password"])) {
        // Se solo uno dei due è impostato
        $error = "Inserisci email e password.";
    }


?>


<html>

<?php
    require_once 'auth.php';
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    if($username= VerificaConnessioneUtente())
    $username = mysqli_real_escape_string($conn, $username);
    
    
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Musclegym_LOGIN</title>

        <link rel='stylesheet' href='style/reg.css'>
        <link rel='stylesheet' href='style/condiviso.css'>
        <script src="scripts/login.js" defer="true"></script>
        <script src="scripts/mobile.js" defer="true"></script>
      
    </head>


    <body>
        <header>
         

            <nav>
               
                <div class="links">
                    <img src="image/logo.png">
                    <a href='home.php'>HOME</a>
                    <a href='shop.php'>SHOP</a>
                    <a href="carrello.php">CARRELLO</a>
    

      
                    <?php if(VerificaConnessioneUtente()){
                 
                  echo "<a class='button' href='logout.php'>$username<br>LOGOUT</a>";
                    }
                    else
                 echo "<a class='button' href='login.php'>LOGIN</a>";
                    ?> 


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
         
            <form name="compilazione_login" method="POST">
                   <h1>LOGIN</h1>
            <h3>ENTRA CON LE TUE CREDENZIALI COMPILANDO I MODULI ED EFFETTUA L'ACCESSO</h3>
            

            
            <?php            
                if($error!=null){
                echo "<h3 class='message_error'>$error</h3>";
                }
            ?>
           
        
                <label class="email">E-mail <input type="test" name="email"></label>
                <span class="email">E-mail non valida</span>


                <label class="password">Password <input type="password" name="password"></label>
                <span class="password">Inserisci la tua password (almeno 8 caratteri)</span>

                

                <h3>HAI GIA' UN ACCOUNT?</h3>
                <label class="login">&nbsp;<input type="submit" value="LOGIN" name="login"></label>
             

                <h3>NON HAI ANCORA UN ACCOUNT?</h3>
               <a class="registrazione" onclick="window.location='signup.php'">REGISTRATI ORA</a>
            
            </form>

        </section>
        

        <div id="epilogo">

            <div class="links">
                <h2>PAGINE</h2>
                      <a href='home.php'>HOME</a>
                    <a href='shop.php'>SHOP</a>
                    <a href="carrello.php">CARRELLO</a>
    

      
                    <?php if(VerificaConnessioneUtente()){
                 
                  echo "<a class='button' href='logout.php'>$username<br>LOGOUT</a>";
                    }
                    else
                 echo "<a class='button' href='login.php'>LOGIN</a>";
                    ?> 
              
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
