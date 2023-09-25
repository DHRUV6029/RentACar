<?php  
session_start();  
  
if(!$_SESSION['user'])  
{  
  header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 19px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>


<body>


<h1>Admin Dashboard, Welcome <?php  
echo $_SESSION['user'];  
?> </h1>

<?php
function GetCurentCompanyUsers()
{ 
  $servername = "191.96.56.103";
  $username = "u409089633_dhruv";
  $password = "Mabncd@16011";
  $db_name = "u409089633_cmpe272";

  if(isset($_POST["search1"]))
  {
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $searchParam = $_REQUEST["search1"];
   
    }
  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    //sql query
     $sql = "select * from user_table where FirstName = '$searchParam' or Email = '$searchParam'";
     $result = mysqli_query($conn, $sql);
  
     if(mysqli_num_rows($result) > 0)
     {
     }else{
      
      echo "<script>alert('No records Found!!!');</script>";
      
    }
    return $result;
    
  }
}
$result = GetCurentCompanyUsers();


  
    
    
      $curl = curl_init();
      curl_setopt($curl , CURLOPT_URL , "https://nilays2498.com/homework6/userApi.php");
      curl_setopt($curl , CURLOPT_POST , 1);
      curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);

      $otherUsers = curl_exec($curl);
      curl_close($curl);
      $users = preg_split('/<br[^>]*>/i', $otherUsers);
      echo "<h2>nilays2498.com Users</h2>";
      echo "<br/>";
      foreach ($users as $user) 
      {
        echo $user;
        echo "<br/>";
      }
    
    



?>


<h2>pateldh6029.com Users</h2>
<!-- Add Search bar to search user session information-->
<div class="topnav">
  <div class="search-container">
  
    <form  method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="text" placeholder="Search(Name or Email)" name="search1">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<br/>

<!-- Search bar code ends here-->
<input type="button" id="btnExport" value="Export To PDF" />
<br/>
<table id="tblUserInfo">
<thead>
  <tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
    <th>Address</th>
    <th>CellPhone</th>
    <th>HomePhone</th>
  </tr>
</thead>

  
    <tr>
      <td> <?php echo "Meet" ; ?> </td>
      <td> <?php echo "Patel" ;?> </td>
      <td> <?php echo "meetpatel@gmail.com"; ?> </td>
      <td> <?php echo "101 E San Fernando"; ?> </td>
      <td> <?php echo "66943532555" ?> </td>
      <td> <?php echo "4314315444"; ?> </td>
  </tr>
      
      <tr>
      <td> Nicolas </td>
      <td> Wills </td>
      <td> niocolas.w@gmail.com </td>
      <td>659 532-7346 </td>
      <td>197 Park Avenue, AZ </td>
      <td> 020 712-8350</td>
      </tr>
      
      <tr>
      <td> Henry </td>
      <td> Marks </td>
      <td> marks.h@gmail.com </td>
      <td>669 834-8856 </td>
      <td>33 South Park Street ,CA</td>
      <td> 090 458-8340</td>
      </tr>
      
      <tr>
      <td> Poojan</td>
      <td> Shah </td>
      <td> pj7.shah@gmail.com </td>
      <td>  669-534-5455 </td>
      <td> 360 Apartments San California</td>
      <td> 669-837-9876</td>
      </tr>
      
      
      
  </tr>
    
 

 </table>

 <br/>
 <br/>
 <br/>

 




 <br/>



 

 <!--Jquery function Codde-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript">
    $("body").on("click", "#btnExport", function () {
        html2canvas($('#tblUserInfo')[0], {
            onrendered: function (canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500
                    }]
                };
                pdfMake.createPdf(docDefinition).download("Active_User_List.pdf");
            }
        });
    });
</script>

<h3><a href="logout.php">Logout</a> </h3>

</body>
</html>