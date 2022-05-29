<?php
$msg_result=null;
    require_once "auth.php";

    
    if(!empty($_POST["completaordine"])){
    if($username= VerificaConnessioneUtente()){
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
  
    $query = "SELECT * FROM prodotti";
    $res = mysqli_query($conn, $query);
  

    $username = mysqli_real_escape_string($conn, $username);   
    
    $cont=mysqli_num_rows($res);
   
    $query = "SELECT nome, cognome FROM utenti WHERE username = '$username'";
    $res2 = mysqli_query($conn, $query);

    $row= mysqli_fetch_assoc($res2);

    $nome= $row["nome"];
    $cognome= $row["cognome"];

    for($i=1; $i<=$cont; $i++){
   
       if(isset($_COOKIE[$i])){
   
           $value= $_COOKIE[$i];
           $query = "SELECT nome, prezzo FROM prodotti WHERE id_prodotto = '$value'";
           $res2 = mysqli_query($conn, $query);
           $row= mysqli_fetch_assoc($res2);

           
        $nome_maglia= $row["nome"];
        $prezzo= $row["prezzo"];


        $data_acquisto= date('Y-m-d');
    


        
        $query = "INSERT INTO ordine(nome, cognome, nome_maglia, prezzo, data_ordine) VALUES('$nome', 
       '$cognome', '$nome_maglia', '$prezzo', '$data_acquisto')";




        mysqli_query($conn, $query);
         
        
            
       
       
      
    } 
    }
    $msg_result= "Hai effettuato correttamente la prenotazione. Puoi andare a ritirare l'articolo direttamente in sede.";
    header("Location: cancellatutticookie.php");
    mysqli_free_result($res);
    mysqli_close($conn);
   
  
   
    
    

    }
    else
    header("Location: login.php");
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
        <title>Musclegym_CARRELLO</title>


        <link rel='stylesheet' href='style/condiviso.css'>
        <link rel='stylesheet' href='style/carrello.css'>
        <script src="scripts/carrellofetch.js" defer="true"></script>
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
               
        </header>


        <section>
            <div class="flex_container">
          
              
                <div id="carrello">
                    
                     
                     

                <!-- -->



                </div>   

                 <div id="ordine">

            
            <!-- -->


                  </div>
            

                  
            </div>
         
            



        </section>


        <div id="epilogo">

            <div class="links">
                <h2>PAGINE</h2>
                <a href='home.php'>HOME</a>
                    <a href='shop.php'>SHOP</a>
                    <a href="carrello.php">CARRELLO</a>
    

      
                    <?php if(VerificaConnessioneUtente()){
                 
                  echo "<a class='button' href='logout.php'>LOGOUT</a>";
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
