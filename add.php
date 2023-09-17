<?php
// Connect to your database (replace with your database credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data to add a game to the database (replace with your data)
$gameName = "Sample Game";
$gameUrl = "sample_game.html";

$sql = "INSERT INTO games (name, url) VALUES ('$gameName', '$gameUrl')";

if ($conn->query($sql) === TRUE) {
    echo "Game added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
