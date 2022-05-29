
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
        <title>Musclegym_ABBONAMENTO</title>

        <link rel='stylesheet' href='style/abbonamento.css'>
        <link rel='stylesheet' href='style/condiviso.css'>
        <script src="scripts/api_alimenti.js" defer></script>
        <script src="scripts/mobile.js" defer="true"></script>
      
    </head>

    <body>
        <header>
            <div class="trasparenza">
            </div>

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


            <div id="titolo">
                <h1>
                    <strong>ABBONAMENTO</strong> 
                </h1>
            </div>
    
        </header>

        <section>

            <form method="POST">
                <span>Cerchi qualche alimento in particolare?</span>
                <input type='text' id='food' name="cibo" placeholder="rice, chicken, carrot ecc...">
                <input type='submit' id='submit' value='cerca ora!'>
            </form>

       

            <div class="flex_container">

                    

            </div>

       



            <div class="flex_container">




            <div class="mensile trasparenza">
                <h1>
                    MENSILE
                </h1>

                <h3>
                    GODI DEI VANTAGGI MUSCLEGYM PER 1 MESE
                </h3>

                <h2>
                    40 EURO
                </h2>
            </div>

            <div class="trimestrale trasparenza">
            
              
                <h1>
                    TRIMESTRALE
                </h1>

                <h3>
                    GODI DEI VANTAGGI MUSCLEGYM PER 3 MESI
                </h3>

                <h2>
                    100 EURO
                </h2>
         
            </div>

            <div class="annuale trasparenza">
               <h1>
                   ANNUALE
               </h1>

               <h3>
                GODI DEI VANTAGGI MUSCLEGYM PER 12 MESI
            </h3>

            <h2>
                350 EURO
            </h2>
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