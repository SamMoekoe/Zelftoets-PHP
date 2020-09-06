<?php 
require('includes/functions.php');
require('includes/header.php');
$conn = OpenDBConn();
$conn = null;
?>
<body>

<?php require('includes/menu.php') ?>

<div class="mb-5 mt-2 container">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>View all <?php echo $count ?>  birthdays here</h1>
        <a class="btn-lg btn-primary text-white align-self-center" href="createCountry.php">Add a birthday +</a>
    </div>
</div>

<?php require('includes/footer.php'); ?>

</body>
</html>