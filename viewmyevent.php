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
  <th>Attendees</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "loginsystem");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT event_id, event_name, event_location, event_date, event_description, orgname attendees FROM events WHERE user_id = ".$_SESSION['u_id'];
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>". $row["event_id"]. "<tr><td>" . $row["event_name"]. "</td><td>" . $row["event_location"] . "</td><td>" . $row["event_date"]. "</td></tr>". $row["attendees"]. "<tr><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>