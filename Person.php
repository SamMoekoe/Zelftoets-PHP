<?php 
require('includes/functions.php');
require('includes/header.php');
$conn = OpenDBConn();

$id = $country = '';

// GET the id via url GET METHOD
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$stmt = $conn->prepare("SELECT * FROM birthdays WHERE id=?");  
$stmt->execute([$id]);
$birthday = $stmt->fetch();
$conn = null;
?>
<body>

<?php require('includes/menu.php') ?>

<div class="mb-5 mt-2 container">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1><?=$birthday['Person']?></h1>
        <div class="align-self-center">
            <a class="btn-lg btn-info text-white" href="updateBirthday.php?id=<?=$birthday['id']?>">Update Birthday</a>
            <a class="btn-lg btn-danger text-white" href="Delete.php?id=<?=$birthday['id']?>">Delete Birthday x</a>
        </div>
    </div>

    <div class="content mt-2 container">
        <div>
            <div>
                <div class="text-left border col-3">
                    <div class="border-bottom">
                        <strong>Name: <?=$birthday['Person']?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Day: <?=$birthday['Day']?></strong>
                    </div>
                     <div class="border-bottom">
                        <strong>Month: <?=$birthday['Month']?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Year: <?=$birthday['Year']?></strong>
                    </div>
                </div>
            </div>
            <p class="card-text">
            <?=$birthday['More info']?>
            </p>
        </div>
    </div>
    <hr>
</div>

<?php require('includes/footer.php'); ?>

</body>
</html>