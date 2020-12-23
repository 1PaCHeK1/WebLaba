<?php
function SelectDb($connect, $model_name, $where=NULL, $start = 0, $end = PHP_INT_MAX)
{

    $model_fields = [
        "User" => ['users', ['id', 'full_name', 'login', 'email', 'avatar', 'status', 'cost']],
        "UserInsert" => ['users', ['full_name', 'login', 'email', 'password', 'avatar', 'status']],
        "Film" => ['film', ['id', 'name', 'director_id', 'data', 'price', 'descript']],
        "Director" => ['director', ['id', 'first_name', 'last_name', 'awards', 'descript']],
        "Films_Director" => ['films_director', ['film_id', 'director_id']],
        "Receipt" => ['receipt', ['id', 'user_id', 'film_id', 'price', 'data']]
    ];

    $result = [];
    $table_name = $model_fields[$model_name][0];

    $fields = $model_fields[$model_name][1];
    
    if($where != NULL)
    {        
        // $where_str =join(', ', array_map(function($a, $b) { return "`".mysqli_real_escape_string($connect, $a)."` = ".mysqli_real_escape_string($connect, $b); }, 
        //                     array_keys($where), 
        //                     array_values($where)));
        
        $where_str = [];
        foreach(array_keys($where) as $item)
        {
            array_push($where_str, "`".mysqli_real_escape_string($connect, $item)."` = '".mysqli_real_escape_string($connect, $where[$item])."'");
        }

        $response = mysqli_query($connect, "SELECT "
            .join(', ', array_map(function($str) {return "`$str`";}, $fields))
            ." FROM `$table_name` WHERE "
            .join(', ', $where_str));
    }
    else
    {
        $response = mysqli_query($connect, "SELECT "
            .join(', ', array_map(function($str) {return "`$str`";}, $fields))
            ." FROM `$table_name` ");
    }

    for($i = 0; ($row = mysqli_fetch_assoc($response)) && $i < $end; $i++)
        if($i >= $start)
            array_push($result, $row);
    
    return $result;
}
?>