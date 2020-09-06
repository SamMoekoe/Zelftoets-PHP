<?php 
require('includes/functions.php');
require('includes/header.php');
$conn = OpenDBConn();
$query = $conn->prepare('SELECT * FROM birthdays ORDER BY Year,Month,Day');
$query->execute();
$count = $query->rowCount();
$conn = null;
?>
<body>

<?php require('includes/menu.php') ?>

<div class="mb-5 mt-2 container">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>View all <?php echo $count ?>  Birthdays here</h1>
        <a class="btn-lg btn-primary text-white align-self-center" href="createCountry.php">Add a Birthday +</a>
    </div>
    <div class="row">
        <?php foreach ($query as $row){
            ?>
            <div class="mt-2 container col-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="assets/images/<?=$row['Photo']?>" alt="No Photo available">
                    <div class="card-body">
                    <h4 class="card-title"><?=$row['Person']?></h4>
                    <p class="card-text"><?=$row['Day']?>-<?=$row['Month']?>-<?=$row['Year']?></p>
                    <a href="Person.php?id=<?=$row['id']?>" class="btn btn-primary">More details</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php require('includes/footer.php'); ?>

</body>
</html>