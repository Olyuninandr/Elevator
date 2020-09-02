<?php
require_once('layouts/header.php');


if (isset($_GET['floor'])) {
    if ($_GET['floor'] == 'stop') {
        $floor = rand(1, $_GET['building']);
        $str = "<br>Обережно! Ви зупинилися між " . $floor . " і " . ($floor + 1) . " поверхами!";
    } elseif ($_GET['floor'] == 'tech') {
        $str = "<br>Зберігайте спокій. Технічна служба вже в дорозі!";
    } elseif ($_GET['floor'] == $_GET['myFloor']) {
        $str = "<br>Ви вже на цьому поверсі";
    } else
        $str = "<br>Вітаємо на " . $_GET['floor'] . " поверсі!";
} ?>

<div class="container">
    <div class="row justify-content-center">
        <h1>
            <?= $str; ?>
        </h1>
    </div>
    <div class="row justify-content-center">
        <h3>
            <a href="/Elevator/index.php">Повернутися</a>
        </h3>
    </div>
</div>
