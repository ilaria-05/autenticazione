<!DOCTYPE html>
<html>
    <head></head>
        <body>
            <?php 
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "utenti";
                //connesssione al server sql con selezione del database
                $conn = mysqli_connect($hostname, $username, $password, $dbname);
                if(!$conn)
                {
                    die("<br><br><strong>Errore nella connessione</strong>");
                    exit();
                }
                session_start();
                $user = $_POST['User'];
                $Nome = $_POST['Nome'];
                $Cognome = $_POST['Cognome'];
                $Password = $_POST['Password'];

                $query = "INSERT INTO utenti  (Username, Nome, Cognome, Password) VALUES
                ('$user', '$Nome','$Cognome', '$Password'";


        
                $risultato = mysqli_query($conn, $query);
                if(!$risultato)
                {
                    print "Errore nel comando ";
                    exit();
                }
            mysqli_close($conn);
            ?>
        </body>

</html>