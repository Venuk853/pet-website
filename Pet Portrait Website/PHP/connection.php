<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "fff";  
       
       $conn = new mysqli($servername, $username, $password);

       // Check connection
       if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
       }
       echo "Connected successfully";
?> 
<html>
       <body>
              <H1>Hello</H1>
       </body>
</html>