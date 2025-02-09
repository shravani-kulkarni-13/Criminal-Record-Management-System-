<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--Font-awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <link rel="stylesheet" href="style.css">
    <title>View</title>
    <style>
        .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a{
  text-decoration: none;
  color: black;
  background: aliceblue;
}

th, td {
    border: 1px solid black; 
    padding: 10px;
    text-align: left;
}




    </style>
</head>
<body>
    <div class="container2">
        <img src="./images/satyamevjayte.png" alt="" class="logo">
      </div>
      <nav class="navbar navbar-expand-lg navbar-light" style="margin-left:10%">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 32%;">
              <li class="nav-item">
                <a class="nav-link active fs-3" aria-current="page" href="./add.html">Add 
                    &nbsp;| </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-3" aria-current="page" href="./update.html">Update &nbsp;| </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active fs-3" aria-current="page" href="./viewall.php">View &nbsp;  </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr><br>

      <?php
// Database connection
$servername = "localhost";
$username = "root";  // Default XAMPP username
$password = "";  // Default password is empty
$database = "Criminal_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT * FROM Criminal_record";
$result = $conn->query($sql);?>
<center>
<h2>Criminal Data</h2>
<br>

    <table border="2px black;">
        <tr>
            <th>Criminal ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Criminal Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Case Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Fetch and display data
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["criminalId"]."&nbsp;&nbsp;</td>
                        <td>".$row["criminalName"]."&nbsp;&nbsp;</td>
                        <td>".$row["caseName"]."&nbsp;&nbsp;</td>
                        <td>".$row["age"]."&nbsp;&nbsp;</td>
                        <td><a href='update.html'>"."Update&nbsp;&nbsp;"."
                        <td><a href='delete.html'>"."Delete&nbsp;&nbsp;"."
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4' style='text-align:center;'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <center>
    

    <footer class="footer">
        <div class="footer-body">
          <p>&copy; All Rights Reserved.</p>
          <div class="socialLinks">
            <a href="#" class="socialIcon"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
    </footer>

    <script src="./script.js"></script>
</body>
</html>