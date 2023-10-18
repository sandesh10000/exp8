<?php
// Connect to the MySQL database
$conn = new mysqli("localhost", "root", "", "ipexp5");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the table (example query)
$sql = "SELECT * FROM ipexp5";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
        echo "<p><strong>Password:</strong> " . $row["password"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
