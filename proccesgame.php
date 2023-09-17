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

// Get game data from the form
$gameName = $_POST['game_name'];
$gameUrl = $_POST['game_url'];

// Insert the game data into the database
$sql = "INSERT INTO games (name, url) VALUES ('$gameName', '$gameUrl')";

if ($conn->query($sql) === TRUE) {
    echo "Game added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
