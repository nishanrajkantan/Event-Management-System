<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
  <?php
  include 'header.php';
?>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Event Name</th> 
  <th>Event Location</th>
  <th>Event Date</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "loginsystem");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $eid = $_POST['event_id'];
  $sql = "SELECT * FROM events WHERE event_id = $eid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<a href="more.php&event_id='.$row["event_id"].'"><tr><td>" . $row["event_name"]. "</td><td>" . $row["event_location"] . "</td><td>"
. $row["event_date"]. "</td></tr></a>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>