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
    <title>Add</title>
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
                <a class="nav-link active fs-3" aria-current="page" href="./update.php">Update &nbsp;| </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-3" aria-current="page" href="./viewall.php">View </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr><br>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $criminalId = $_POST['criminalId'];
    $criminalName = $_POST['criminalName'];
    $caseName = $_POST['caseName'];
    $age = $_POST['age'];

    // Connect to MySQL database
    $conn = new mysqli("localhost", "root", "", "Criminal_data");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the update query
    $sql = "UPDATE criminal_record SET criminalName = ?, caseName = ?, age = ? WHERE criminalId = ?";

    // Use prepared statement to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssis", $criminalName, $caseName, $age, $criminalId);
        
        // Execute the query
        if ($stmt->execute()) {
            echo "<center><b>Record updated successfully!";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
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
