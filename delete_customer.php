<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crm";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete customer
    $sql = "DELETE FROM customers WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Customer deleted successfully";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
    exit();
}
?>