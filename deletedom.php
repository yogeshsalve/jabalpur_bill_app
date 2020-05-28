
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jabalpurbills";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "truncate table dom";

if ($conn->query($sql) === TRUE) {
  echo "All Records deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

<script>
setTimeout(function () {    
    window.location.href = 'index.php'; 
},3000);
</script>