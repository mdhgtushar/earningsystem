<?php
include "conn.php";
class Fruit {
  // Properties
  public $name;
  public $color;
  public $servername = "localhost";
  public $username = "root";
  public $password = "";
  public $dbname = "test";
  
  // Create connection
 public $conn = mysqli_connect($servername, $username, $password, $dbname);
  
 
  // Methods
  function get_data($name) {
    $this->name = $name;

 // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

    $sql = "SELECT * FROM $name";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        return "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
      }
    } else {
      return "0 results";
    }


  }
  function get_name() {
    return $this->name;
  }
}
?>