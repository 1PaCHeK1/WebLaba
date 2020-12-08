<?php
function DeleteIdDb($connect, $model_name, $id=null)
{
    $model_fields = [
        "User" => ['users', [['receipt', 'user_id']]],
        "Film" => ['film',  [['receipt', 'film_id']]],
        "Director" => ['director', [['film', 'director_id']]],
        "Receipt" => ['receipt', []]
    ];

    $table_name = $model_fields[$model_name][0];

    mysqli_query($connect, "DELETE FROM `$table_name` WHERE `id` = ".mysqli_real_escape_string($connect, $id));
}
?>