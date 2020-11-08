

      <?php


            $servername = "ls-65252033f9645df7af3667e778a1a1f56a58d15c.cwklw7vjebdw.ca-central-1.rds.amazonaws.com";
            $PARAM_port='3306';
            $username = "dbmasteruser";
            $password = '$Server916';
            $dbname = "dbmaster";
           

            
              try {
 
                echo $test;
                $connexion = new PDO('mysql:host='.$servername.';port='.$PARAM_port.';dbname='.$dbname, $username, $password);
                //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                 echo $test;
                // set the PDO error mode to exception
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 echo $test;
                $sql = "INSERT INTO post (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
                 echo $test;
                // use exec() because no results are returned
                $connexion->exec($sql);
                echo "New record created successfully";
            } catch (PDOException $e) {
                echo  $sql . "<br>" . $e->getMessage();
            }

            $conn = null;
       
            header("Location: index.html");
     
        ?>