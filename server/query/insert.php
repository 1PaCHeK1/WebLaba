<?php

function InsertDb($connect, $model_name, $fields)
{
    $model_fields = [
        "User" => ['users', ['full_name', 'login', 'email', 'password', 'avatar', 'status', 'cost']],
        "Film" => ['film', ['name', 'director_id', 'data', 'price', 'descript']],
        "Director" => ['director', ['first_name', 'last_name', 'awards', 'descript']],
        "Receipt" => ['receipt', ['user_id', 'film_id', 'price', 'data']]
    ];

    $table_name = $model_fields[$model_name][0];

    $select_fields = [];
    foreach($model_fields[$model_name][1] as $field)
    {
        try
        {
            $select_fields[$field] = mysqli_real_escape_string($connect, $fields[$field]);
        }
        catch(Exception $e) 
        {
            echo json_encode(["msg" => "Не найдено поле"]);
            die();
        }
    }
        
    mysqli_query($connect, "INSERT INTO `$table_name` ("
                .join(', ', array_map(function($str) {return "`$str`";}, $model_fields[$model_name][1]))
                .") VALUES ("
                .join(',', array_map(function($str) {return "'$str'";}, $select_fields))
                .")");
}
?>