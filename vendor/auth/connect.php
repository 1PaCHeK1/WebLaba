<?php

    $connect = mysqli_connect('localhost', 'root', '', 'weblaba');

    if (!$connect) {
        die('Error connect to DataBase');
    }