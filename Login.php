<?php
$php_errormsgS = $_POST['quote'];
$Email = $_POST['Email'];
$pasword = $_POST['pasword'];



//Login Information
$usr = 'mrflemin_****';
$pw = '***********';
$db = 'mrflemin_****';

// Create connection
if (strlen($author) > 0 or strlen($contenta) > 0) {
    $conn = new mysqli('localhost', $usr, $pw, $db);
}
// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}



$sql = "INSERT INTO quotes (a_id, p_id, content) VALUES ($author, $picture, $content )";



$sql2 = "INSERT INTO quotes (a_id, p_id, content) VALUES ($author, $picture, $content )";

if ($conn->query($sql) === true) {
    echo "Successful Order!";
    echo "<a href=\"MainPage.html\" onclick=\"location.reload()\">Go back to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}
$conn->close();

?>
