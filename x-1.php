
<?php
// Set database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parth";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the name of the row you want to retrieve
$row_name = "sibu";

// Create a SQL query to retrieve the row with the specified name
$sql = "SELECT * FROM appointment WHERE NAME = '$row_name'";

// Execute the query and store the result
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["p_id"] . "<br>";
        echo "Name: " . $row["NAME"] . "<br>";
        echo "Email: " . $row["EMAIL"] . "<br>";
        // Add additional fields as needed
    }
} else {
    echo "No rows found.";
}

// Close the database connection
mysqli_close($conn);
?>
