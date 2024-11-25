<?php
$Conn = mysqli_connect(
    "edlya.h.filess.io",
    "catalog_wheretide",
    "41f30bb53e1f8225031f7fa13c63f6aba9e4c7af",
    "catalog_wheretide",
    "3307"
);
if (mysqli_connect_errno()) {
    echo "database connection failed: " . mysqli_connect_errno();
}
?>

<?php
/*
$servername = "edlya.h.filess.io";
$username = "catalog_wheretide";
$password = "41f30bb53e1f8225031f7fa13c63f6aba9e4c7af";
$dbname = "catalog_wheretide";
$port = "3307";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
echo "connected succesfully";
*/
?>
