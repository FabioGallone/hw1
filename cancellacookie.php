<?php

        include 'auth.php'; 
      // Verifica dati GET
      if(isset($_GET["id_maglia"]))
      {
           
            // Connessione al database
            $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
            // Elimina evento
            $id_maglia = mysqli_real_escape_string($conn, $_GET["id_maglia"]);
            //mysqli_query($conn, "DELETE FROM agenda WHERE id = '".$id_evento."'");
            setcookie($id_maglia, "");
            // Chiudi connessione
            mysqli_close($conn);
      }

?>