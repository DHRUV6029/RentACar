<?php
$servername = "191.96.56.103";
$username = "u409089633_dhruv";
$password = "Mabncd@16011";
$db_name = "u409089633_cmpe272";


    $conn = new mysqli($servername, $username, $password , $db_name);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   

    $sql = "SELECT * FROM user_table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["FirstName"] . " " . $row["LastName"];
            echo "<br>";
        }
    } 
    else 
    {
        echo "0 results";
    }
    $conn->close();

    


?>
