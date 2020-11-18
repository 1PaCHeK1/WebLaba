<?php
    $model_fields = [
        "User" => ['users', ['id', 'full_name', 'login', 'email', 'avatar', 'status']],
        "UserInsert" => ['users', ['full_name', 'login', 'email', 'password', 'avatar', 'status']],
        "Film" => ['films', ['id', 'name', 'director_id', 'data']],
        "Director" => ['directors', ['id', 'first_name', 'last_name']],
        "Films_Director" => ['films_director', ['film_id', 'director_id']],
        "Receipt" => ['receipt', ['id', 'user_id', 'film_id', 'price', 'data']]
    ];
?>