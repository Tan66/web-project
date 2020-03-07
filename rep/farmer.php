<!DOCTYPE html>
<html>
<head>
<title>Report</title>
<link rel="stylesheet" href="table.css">
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
            <h1>Farmer</h1>
            <form  class="back" method="get" action="../report.html">
                    <button type="submit">Back</button>
            </form>
<table>
<tr>
<th>Farmer ID</th>
<th>Name</th>
<th>Location</th>
<th>Contact</th>
<th>Corp</th>
<th>Price(per kg)</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT fid, fname, location, contact, crop,price from farmer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["fid"]. "</td><td>" . $row["fname"] . "</td><td>". $row["location"]. "</td><td>". $row["contact"]."</td><td>". $row["crop"]."</td><td>". $row["price"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
</div>

<div class="fixed-footer">
                Copyright &copy; Storage Management System 2019
        </div>
</body>
</html>