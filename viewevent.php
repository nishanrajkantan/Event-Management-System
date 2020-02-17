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
  <th>Description</th>
  <th>Date</th>
  <th>Time</th>
  <th>Location</th>
  <th>Organisation Name</th>
  <th>Attendees</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "loginsystem");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT event_id, event_name, event_location, event_date, event_time, event_description, orgname, attendees FROM events";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>". $row["event_name"]. "<td>" . $row["event_description"]. "</td><td>" . $row["event_date"]. "</td><td>" . $row["event_time"]. "</td><td>" . $row["event_location"]. "</td><td>" . $row["orgname"] . "</td><td>" . $row["attendees"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>