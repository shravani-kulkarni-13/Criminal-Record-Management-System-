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

        <div class="container" style="font-size: 20px; padding: 10px; text-align: center;">
          <h3>Update Criminal Details</h3>
            <form action="update_data.php" method="post">
                <div style="margin-left: 5%;">
                    <label for="criminalId" style="margin-right: 80px;">Criminal ID:</label>
                <input type="text" id="criminalId" name="criminalId" required><br><br>
        
                <label for="criminalName" style="margin-right: 50px; margin-left: 70;">Criminal Name:</label>
                <input type="text" id="criminalName" name="criminalName" required><br><br>
        
                <label for="caseName" style="margin-right: 80px;">Case Name:</label>
                <input type="text" id="caseName" name="caseName" required><br><br>
        
                <label for="age" style="margin-right: 150px; margin-left: 70;">Age</label>
                <input type="number" id="age" name="age" required><br><br>
              
              <div class="row" style="width: 20%; margin-left: 44%;">
                <input type="submit" value="Update" style="padding-top: 5px; text-align: center;">
              </div>
                </div>
            </form>
          </div>
    

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