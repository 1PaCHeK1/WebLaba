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
            array_push($where_str, "`".mysqli_real_escape_string($connect, $item)."` = ".mysqli_real_escape_string($connect, $where[$item]));
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

function UpdateDb($connect, $model_name, $fields=[], $files=[])
{
    $model_fields = [
        "User" => ['users', ['full_name', 'login', 'email', 'avatar', 'status', 'cost']],
        "UserInsert" => ['users', ['full_name', 'login', 'email', 'password', 'avatar', 'status']],
        "Film" => ['film', ['name', 'director_id', 'data', 'price', 'descript']],
        "Director" => ['director', ['first_name', 'last_name', 'awards', 'descript']],
        "Films_Director" => ['films_director', ['film_id', 'director_id']],
        "Receipt" => ['receipt', ['user_id', 'film_id', 'price', 'data']]
    ];

    $table_name = $model_fields[$model_name][0];

    $field_update = [];

    foreach($model_fields[$model_name][1] as $field)
    {

        if(isset($fields[$field]) &&  $fields[$field] != "") 
        {
            $field_update[$field] = mysqli_real_escape_string($connect, $fields[$field]);
        }
        if(isset($files[$field]) && $files[$field]['type'] == 'image/jpeg' && 500000 < $files[$field]['size'] && $files[$field]['size'] > 0 )
        {
            $path = 'server/uploads/' . time() . mysqli_real_escape_string($connect, $files[$field]['name']);
            move_uploaded_file($files[$field]['tmp_name'], $path);
            $field_update[$field] = $path;
        }
    }

    return mysqli_query($connect, "UPDATE `$table_name` SET "
        .join(', ', array_map(function($a, $b) { return "`$a` = '$b'"; }, 
            array_keys($field_update),
            array_values($field_update)))
        ." WHERE `id` = ".mysqli_real_escape_string($connect, $fields['id'])
    );
}

function DeleteIdDb($connect, $model_name, $id=null)
{
    $model_fields = [
        "User" => ['users', [['Receipt', 'user_id']]],
        "Film" => ['film',  [['Receipt', 'film_id']]],
        "Director" => ['director', [['Film', 'director_id']]],
        "Receipt" => ['receipt', []]
    ];

    $table_name = $model_fields[$model_name][0];

    foreach($model_fields[$model_name][1] as $field)
    {
        $objects = SelectDb($connect, $field[0], $where=[$field[1]=>$id]);
        if($objects != [])
            return false;
    }

    mysqli_query($connect, "DELETE FROM `$table_name` WHERE `id` = ".mysqli_real_escape_string($connect, $id));
    return true;
}
?>