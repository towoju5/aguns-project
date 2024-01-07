<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "aguns";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS cards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    card_name VARCHAR(255) NOT NULL,
    card_logo VARCHAR(255) NOT NULL,
    card_number_length INT NOT NULL
);";

// Check if the 'cards' table exists
$tableExistsQuery = "SHOW TABLES LIKE 'cards'";
$tableExistsResult = $conn->query($tableExistsQuery);

if ($tableExistsResult->num_rows == 0) {
    // Table doesn't exist, create it
    $createTableQuery = "CREATE TABLE cards (
        id INT AUTO_INCREMENT PRIMARY KEY,
        card_name VARCHAR(255) NOT NULL,
        card_logo VARCHAR(255) NOT NULL,
        card_number_length INT NOT NULL
    )";

    if ($conn->query($createTableQuery) === TRUE) {
        echo "Table 'cards' created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

// Function to add a new card
function addCard($cardName, $cardLogo, $cardNumberLength) {
    global $conn;
    
    $sql = "INSERT INTO cards (card_name, card_logo, card_number_length) VALUES ('$cardName', '$cardLogo', $cardNumberLength)";
    
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to get all cards
function getAllCards() {
    global $conn;

    $result = $conn->query("SELECT * FROM cards");
    
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Function to update a card
function updateCard($id, $cardName, $cardLogo, $cardNumberLength) {
    global $conn;
    
    $sql = "UPDATE cards SET card_name='$cardName', card_logo='$cardLogo', card_number_length=$cardNumberLength WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to delete a card
function getCard($id) {
    global $conn;

    $sql = "SELECT * FROM cards WHERE id=$id";

    if ($result = $conn->query($sql)) {
        return $result->fetch_array(MYSQLI_ASSOC);
    } else {
        return false;
    }
}

// Function to delete a card
function deleteCard($id) {
    global $conn;

    $sql = "DELETE FROM cards WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Close the database connection
// $conn->close();
?>
