<?php
    $model_fields = [
        "User" => ['users', ['id', 'full_name', 'login', 'email', 'avatar', 'status']],
        "UserInsert" => ['users', ['full_name', 'login', 'email', 'password', 'avatar', 'status']],
        "Film" => ['films', ['id', 'name', 'director_id', 'data', 'image', 'descript']],
        "Director" => ['directors', ['id', 'first_name', 'last_name']],
        "Films_Director" => ['films_director', ['film_id', 'director_id']]
    ];

    try
    {
        $connect = mysqli_connect('localhost', 'root', '', 'weblaba');    

        //$db = new PDO("mysql:host=localhost; dbname=weblaba", "root", "");
        //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if (!$connect) {
            die('Error connect to DataBase');
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    // $insert_sql_user = $db->prepare("INSERT INTO `users` ('full_name', 'login', 'email', 'password', 'avatar', 'status')
    //                                     VALUES (?, ?, ?, ?)");
    // $insert_sql_film = $db->prepare("INSERT INTO `film` (`name`, `director_id`, `data`, `image`, `descript`)
    //                                     VALUES (?, ?, ?, ?, ?)");
    // $insert_sql_director = $db->prepare("INSERT INTO `director` (`first_name`, `last_name`, `awards`)
    //                                     VALUES (?, ?, ?)");

    // $select_sql_users = $db->prepare("SELECT `id`, `full_name`, `login`, `email`, `avatar`, `status` FROM `users`");
    // $select_sql_films = $db->prepare("SELECT * FROM `films`");
    

    