<?php
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
?>  