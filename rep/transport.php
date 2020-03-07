<!DOCTYPE html>
<html>
<head>
<title>Report</title>
<link rel="stylesheet" href="table1.css">
</head>
<body>
    <div class="fixed-header">
            <p>STORAGE MANAGEMENT SYSTEM</p>
            <form class="log-out" method="get" action="../login.html">
                    <button type="submit">Log Out</button>
            </form>
        </div>
        <br/>
    <div class="flex-container">
<div class = "top">
            <h1>Transport</h1>
            <form  class="back" method="get" action="../report.html">
                    <button type="submit">Back</button>
            </form>
<table>
<tr>
<th>Serial Number</th>
<th>Name</th>
<th>Location</th>
<th>Vehicle</th>
<th>Contact</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT tid, tname, location,vehicle, contact from transport";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["tid"]. "</td><td>" . $row["tname"] . "</td><td>". $row["location"]. "</td><td>". $row["vehicle"]."</td><td>". $row["contact"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<div class = "back">
<form method="get" action="../report.html">
                <button type="submit">BACK</button>
            </form>
</div>
</div>
</div>
<div class="fixed-footer">
                Copyright &copy; Storage Management System 2019
        </div>
</body>
</html>