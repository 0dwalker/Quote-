<?php
$content = $_POST['content'];
$picture = $_POST['pic'];
$first_name =  $_POST['first'];
$last_name =  $_POST['last'];
$death_date = $_POST['death'];
$birth_date = $_POST['birth'];
$conn;




//Login Information
$usr = 'mrflemin_****';
$pw = '***********';
$db = 'mrflemin_****';

// Create connection
if (strlen($content) > 0 or strlen($author) > 0) {
    $conn = new mysqli('localhost', $usr, $pw, $db);
}
// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}



$sql = "INSERT INTO quotes (a_id, p_id, content) VALUES ($author, $picture, $content)";

$sql2 = "INSERT INTO authors (f_name, l_name, death, pass) VALUES ($first_name, $last_name, $birth, $death_date)";

$sql3 = "INSERT INTO pictures () VALUES ()";


if ($conn->query($sql) === true) {
    echo "Nice Quote";
    echo "<a href=\"C:\Users\librarystudent\Desktop\Quote--master\Home page.html\" onclick=\"location.reload()\">Go back to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}
$conn->close();

?>
