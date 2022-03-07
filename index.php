<?php include_once("index.html"); 


  $con = mysqli_connect("b2fkm7btnwzbsxqqtnid-mysql.services.clever-cloud.com","uwgkp87cpt4x9t57","Ij7KwdVLn75BDWy0a8HI","b2fkm7btnwzbsxqqtnid");
  $SQL = "SELECT * FROM simulacion";

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  // Perform query
  if ($result = mysqli_query($con, $SQL)) {
    echo "Returned rows are: " . mysqli_num_rows($result);
    // Free result set
    mysqli_free_result($result);
  }
  mysqli_close($con);
?>
