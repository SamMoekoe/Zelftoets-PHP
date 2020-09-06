<?php
require('includes/functions.php');
require('includes/header.php');
$conn = OpenDBConn();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$gone = $conn->prepare("DELETE FROM birthdays WHERE id=?");
//if (Feedback == 'Yes') {
$gone->execute([$id]);
//}
//else {}

require("includes/footer.php");
echo "Birthday Deleted";
$conn = null;
?>
<body>
<?php require("includes/menu.php")?>