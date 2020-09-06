<?php 
require('includes/functions.php');
require('includes/header.php');
$conn = OpenDBConn();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$stmt = $conn->prepare("SELECT * FROM birthdays WHERE id=?");  
$stmt->execute([$id]);
$birthday = $stmt->fetch();

?>
<body>

<?php require('includes/menu.php') ?>

<div class="mb-5 mt-2">
    <h1>Update the birthday of <?=$birthday['Person']?> here</h1>
    <form>
    
    </form>
</div>

<?php require('includes/footer.php'); ?>

</body>
</html>