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
        <title>Musclegym</title>
        <link rel='stylesheet' href='style/hw1.css'>
        <link rel='stylesheet' href='style/condiviso.css'>
        <link rel='stylesheet' href='style/mappa3d.css'>
        <script src="scripts/mobile.js" defer="true"></script>
        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@800&family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">


        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="scripts/custom.js" defer="true"></script>


       
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,
        user-scalable=1">
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
                    <strong>WE ARE</strong> 
                    <span><em>MUSCLEGYM</em></span>
                </h1>
            </div>
     

            <a href="abbonamento.php"><span>SCOPRI DI PIU'</span></a>    
        </header>

        
        <section>


            <div class="flex-container">

            <div class="abbonamento">
            ABBONATI A<br>MUSCLEGYM<br>DA SOLI <span class=text-secondary>40€</span>
            </div>

            <div>
                <h2>
                    Scopri quanto è facile allenarsi da Musclegym!
                </h2>
                    <ol>
                        <li>
                            Allenamento personalizzato
                        </li>
                        <li>
                            Pagamento con addebito diretto sepa su conto corrente e su carta di credito, unica soluzione anticipata con carta di credito o bancomat
                        </li>
                        <li>
                            Vari piani di abbonamento
                        </li>
                        <li>
                            Quota associativa una tantum 10€
                        </li>
                    </ol>
               
            
            </div>
        </div>


        <div class="destra">
        <div class="flex-container">

            <div class="contenuti">
             
                <h4>
                    REPARTO CARDIO FITNESS
                </h4>
                <h6>Le migliori attrezzature per il tuo workout</h6>

                <p>
                    Con i nostri macchinari di ultima generazione potrai allenarti per superare i tuoi limiti ogni giorno migliorando il fisico e le performance.
                </p>
               
              
               
            
            </div>
           
            
           
            <div>
            <img src="image/tapis.jpg">
          
        
          
            </div>

        </div>
    </div>
    <div class="sinistra">
        <div class="flex-container">
          

            <div class="immagine_sinistra">
                <img src="image/manubri.jpg">
            
              
            </div>

           
            <div class="contenuti">
            
             
                <h4>
                    REPARTO ATTREZZI E PESI
                </h4>
                <h6>Qualità e risultati in un'unica sala</h6>

                <p>
                    I nostri macchinari sono forniti da Panatta per garantirti le migliori performance in termini di qualità ed innovazione.
                </p>
               
              
               
            
            </div>
           
        </div>
    </div>

    
    <div class="destra">
        <div class="flex-container">

            <div class="contenuti">
             
                <h4>
                    REPARTO TONIFICAZIONE ISOTONICA
                </h4>
                <h6>Un allenamento a dir poco completo! </h6>

                <p>
                    Resistenza, definizione muscolare e potenziamento sia della parte alta, sia della parte bassa del tuo corpo! Cosa chiedi di più dal tuo allenamento?
                </p>
               
              
               
            
            </div>
           
            
           
            <div>
              <img src="image/tonificazione.jpg">
        
          
            </div>

        </div>
    </div>

   
    <div class="mappa3d">
    Vuoi visitare la palestra nel dettaglio?
    <div id="panorama"> </div>



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