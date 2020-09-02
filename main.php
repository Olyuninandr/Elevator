<?php
require_once('layouts/header.php');

function message($str){
    ?>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <h1>
                <?= $str; ?>
            </h1>
        </div>
        <div class="row justify-content-center">
            <h3>
                <a href="index.php">Повернутися</a>
            </h3>
        </div>
    </div>
    <?php exit();
}

$myFloor = $_POST['floor'];
$building = $_POST['building'];

if(empty($building) or empty($myFloor)):
    $str = "Ви не ввели обов'язкові данні";
    message($str);

elseif ($myFloor > $building):
    $str = "Введіть корректні данні!";
    message($str);
endif;
?>

<br>
<div class="container col-3">
    <div class="row justify-content-center">
        <h3>
            Куди їдемо?
        </h3>
    </div>

    <ul class="list-group">
        <?php for ($i = 1; $i <= $building; $i++): ?>
            <li class="list-group-item">
                <a href="result.php/?floor=<?= $i; ?>&myFloor=<?= $myFloor ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>

        <li class="list-group-item list-group-item-danger">
            <a href="result.php/?floor=stop&building=<?= $building ?>">STOP</a>
        </li>
        <li class="list-group-item list-group-item-warning">
            <a href="result.php/?floor=tech">Викликати технічну службу</a>
        </li>
    </ul>
</div>

